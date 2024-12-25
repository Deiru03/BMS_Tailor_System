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
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fas fa-coins"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Materials Expense</span>
              <span class="info-box-number">
                <?php 
                  $stmt = $pdo->prepare("SELECT SUM(`amount`) FROM `expense`");
                  $stmt->execute();
                  $res = $stmt->fetch(PDO::FETCH_NUM);
                  echo number_format($res[0], 2); // Format as currency
                ?>
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Expense Materials List -->
      <div class="card mt-3">
        <div class="card-header">
          <h3 class="card-title"><b>All Expense Materials</b></h3>
          <a href="index.php?page=add_expense" class="btn btn-primary btn-sm float-right rounded-0">
            <i class="fas fa-plus"></i> Add Expense Materials
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="expenseList" class="table table-hover table-striped text-center">
              <thead>
                <tr>
                  <th>SI</th>
                  <th>Expense Date</th>
                  <th>Expense For</th>
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
