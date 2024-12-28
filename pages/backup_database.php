<?php
// Configuration and error handling
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Function to safely escape values
function escapeValue($value) {
  if (is_null($value)) {
    return 'NULL';
  }
  return "'" . str_replace("'", "''", $value) . "'";
}

// Function to generate backup
function generateBackup($pdo, $selectedTables) {
  $output = "-- Database Backup Generated on " . date('Y-m-d H:i:s') . "\n";
  $output .= "SET FOREIGN_KEY_CHECKS=0;\n\n";

  foreach ($selectedTables as $table) {
    // Sanitize table name to prevent SQL injection
    $table = str_replace('`', '', $table);
    
    // Get table creation SQL
    $stmt = $pdo->prepare("SHOW CREATE TABLE `$table`");
    $stmt->execute();
    $createTableResult = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($createTableResult) {
      $output .= "DROP TABLE IF EXISTS `$table`;\n";
      $output .= $createTableResult['Create Table'] . ";\n\n";
    }

    // Get table data
    $stmt = $pdo->prepare("SELECT * FROM `$table`");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($rows)) {
      foreach ($rows as $row) {
        $columns = array_keys($row);
        $values = array_map('escapeValue', array_values($row));
        
        $output .= "INSERT INTO `$table` (`" . implode("`, `", $columns) . "`) VALUES \n";
        $output .= "(" . implode(", ", $values) . ");\n";
      }
      $output .= "\n";
    }
  }

  $output .= "SET FOREIGN_KEY_CHECKS=1;\n";
  return $output;
}

// Process form submission
$error = '';
$success = '';

if (isset($_POST['submit']) && isset($_POST['table'])) {
  try {
    $selectedTables = array_map('trim', $_POST['table']);
    
    if (empty($selectedTables)) {
      throw new Exception("Please select at least one table to export");
    }

    $backup = generateBackup($pdo, $selectedTables);
    
    // Generate unique filename
    $filename = 'backup_' . date('Y-m-d_His') . '.sql';
    $filepath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . $filename;
    
    // Save file
    if (file_put_contents($filepath, $backup) === false) {
      throw new Exception("Failed to create backup file");
    }

    // Send file to browser
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($filename));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    
    ob_clean();
    flush();
    readfile($filepath);
    unlink($filepath); // Remove temporary file
    exit;

  } catch (Exception $e) {
    $error = $e->getMessage();
  }
} elseif (isset($_POST['submit'])) {
  $error = "Please select at least one table to export";
}

// Get all tables
try {
  $stmt = $pdo->query("SHOW TABLES");
  $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
} catch (PDOException $e) {
  $error = "Failed to retrieve tables";
  $tables = [];
}
?>

<!-- HTML Template -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid mt-3">
      <h1 class="m-0 text-dark">Database Backup</h1>
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Database backup</li>
      </ol>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Create Database Backup</h3>
        </div>
        <div class="card-body">
          <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
          <?php endif; ?>
          
          <form method="post" action="" id="exportForm">
            <div class="row">
              <?php foreach ($tables as $table): ?>
                <div class="col-md-3 col-lg-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="table[]" 
                         value="<?php echo htmlspecialchars($table); ?>">
                    <label class="form-check-label">
                      <?php echo htmlspecialchars($table); ?>
                    </label>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="btn btn-primary" name="submit">
                Export Database
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>