<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-6">
          <!-- <h1 class="m-0 text-dark">Dashboard v2</h1> -->
        </div><!-- /.col -->
        <div class="col-md-6">
          <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol> -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header bg-light border-bottom">
          <div class="d-flex flex-column align-items-center gap-3">
            <!-- <h3 class="card-title" style="font-size: 1.25rem; color: #2c3e50;"><b>Sales Transaction Records</b></h3> -->
            <a href="index.php?page=quick_sell" target="_blank"
              class="btn btn-primary rounded-pill shadow-sm w-50"
              style="transition: all 0.3s ease;
                background: linear-gradient(to right, #4e73df, #224abe);
                border: none;
                font-size: 25px;
                padding: 15px 30px;
                margin: 20px 0;"
              onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';">
              <i class="fas fa-cash-register fa-lg"></i> Create New Sale
            </a>
          </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
          <div class="calculation-area">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box bg-danger ">

                  <div class="info-box-content">
                    <span class="info-box-text">Total Sell</span>
                    <span class="info-box-number">
                      <?php
                      $stmt = $pdo->prepare("SELECT SUM(`net_total`) FROM `invoice`");
                      $stmt->execute();
                      $res = $stmt->fetch(PDO::FETCH_NUM);

                      echo $res[0];

                      ?>
                    </span>
                  </div>
                  <span class="info-box-icon"><i class="material-symbols-outlined">sell</i></span>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>

              <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box bg-secondary">

                  <div class="info-box-content">
                    <span class="info-box-text">Total Paid Amount</span>
                    <span class="info-box-number">
                      <?php
                      $stmt = $pdo->prepare("SELECT SUM(`paid_amount`) FROM `invoice`");
                      $stmt->execute();
                      $res = $stmt->fetch(PDO::FETCH_NUM);

                      echo $res[0];

                      ?>
                    </span>
                  </div>
                  <span class="info-box-icon"><i class="material-symbols-outlined">payments</i></span>

                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box bg-info">

                  <div class="info-box-content">
                    <span class="info-box-text">Total Due Amount</span>
                    <span class="info-box-number">
                      <?php
                      $stmt = $pdo->prepare("SELECT SUM(`due_amount`) FROM `invoice`");
                      $stmt->execute();
                      $res = $stmt->fetch(PDO::FETCH_NUM);

                      echo $res[0];

                      ?>
                    </span>
                  </div>
                  <span class="info-box-icon"><i class="material-symbols-outlined">currency_rupee</i></span>


                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
          <div class="table-responsive">
            <table id="sellTable" class="display dataTable text-center">
              <thead>
                <tr>
                  <th>Invoice no</th>
                  <th>customer</th>
                  <th>order-date</th>
                  <th>sub total</th>
                  <th>Previous due</th>
                  <th>Net total</th>
                  <th>paid </th>
                  <th>due</th>
                  <th>status</th>
                  <th>payment type</th>
                  <th>action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card-body -->
    </div>
  </section>