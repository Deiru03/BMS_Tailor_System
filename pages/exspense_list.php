<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h2 class="m-0 text-dark">Expense List Materials</h2> -->
        </div>
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Expense Materials</li>
          </ol> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Summary Section -->
      <div class="row">
        <!-- Total Expenses Box -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fas fa-coins"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Materials Expense</span>
              <span class="info-box-number">
                <?php
                // Get total expenses
                $stmt = $pdo->prepare("SELECT 
                COUNT(*) as total_entries,
                SUM(`amount`) as total_amount,
                AVG(`amount`) as avg_amount,
                MAX(`amount`) as highest_expense
                FROM `expense`");
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_ASSOC);

                echo '<span class="h4">₱ ' . number_format($res['total_amount'], 2) . '</span>';
                echo '<div class="text-sm mt-2">';
                echo '<div>Number of Expenses: ' . $res['total_entries'] . '</div>';
                echo '<div>Average Expense: ₱ ' . number_format($res['avg_amount'], 2) . '</div>';
                echo '<div>Highest Expense: ₱ ' . number_format($res['highest_expense'], 2) . '</div>';
                echo '</div>';
                ?>
              </span>
            </div>
          </div>
        </div>

        <!-- Total Income Box -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fas fa-dollar-sign"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Income</span>
              <span class="info-box-number">
                <?php
                // Get total sales and expenses
                $stmt = $pdo->prepare("SELECT 
                SUM(payment_amount) as total_sales 
                FROM sell_payment");
                $stmt->execute();
                $sales = $stmt->fetch(PDO::FETCH_ASSOC);

                $stmt = $pdo->prepare("SELECT 
                SUM(amount) as total_expenses 
                FROM expense");
                $stmt->execute();
                $expenses = $stmt->fetch(PDO::FETCH_ASSOC);

                $total_income = $sales['total_sales'] - $expenses['total_expenses'];

                echo '<span class="h4">₱ ' . number_format($total_income, 2) . '</span>';
                echo '<div class="text-sm mt-2">';
                echo '<div>Total Sales: ₱ ' . number_format($sales['total_sales'], 2) . '</div>';
                echo '<div>Total Expenses: ₱ ' . number_format($expenses['total_expenses'], 2) . '</div>';
                echo '</div>';
                ?>
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Expense Materials List -->
      <div class="card mt-3">
        <div class="card-header bg-light py-3">
          <div class="d-flex justify-content-between align-items-center">
            <h3 class="card-title m-0">
              <i class="fas fa-list-alt mr-2"></i>
              <span class="font-weight-bold">All Expense Materials</span>
            </h3>
            <a href="index.php?page=add_expense" class="btn btn-primary rounded-pill px-4">
              <i class="fas fa-plus mr-1"></i>
              Add Expense Materials
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="expenseList" class="table table-hover table-striped text-center">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Expense Date</th>
                  <th>Expense For</th>
                  <th>Supplier</th>
                  <th>Price</th>
                  <th>No. Materials</th>
                  <th>Quantity type</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->