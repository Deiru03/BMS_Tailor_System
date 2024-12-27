<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid mt-5">
      <div class="row ">
        <div class="col-md-6">
          <!-- <h1 class="m-0 text-dark">Customer</h1> -->
          
          </div><!-- /.col -->
          <div class="col-md-6 mt-3">
            <!-- <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Customer</li>
            </ol> -->
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <!-- .row -->
             <div class="card">
               <div class="card-body">
                 <div class="row">
                 <div class="col-12 col-sm-6 col-md-4">
                  <div class="info-box bg-danger mb-3">
                     <div class="info-box-content">
                      <span class="info-box-text">Total transaction</span>
                      <span class="info-box-number"> 
                      <?php 
                        $stmt = $pdo->prepare("SELECT SUM(`total_buy`) FROM `member`");
                        $stmt->execute();
                        $res = $stmt->fetch(PDO::FETCH_NUM);

                        echo $res[0];

                      ?>
                        </span>
                    </div>
  <span class="info-box-icon "><i class="material-symbols-outlined">stacked_line_chart</i></span>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>

                 <div class="col-12 col-sm-6 col-md-4">
                  <div class="info-box bg-success mb-3">
                    <div class="info-box-content">
                      <span class="info-box-text">Total paid</span>
                      <span class="info-box-number"> 
                        <?php 
                          $stmt = $pdo->prepare("SELECT SUM(`total_paid`) FROM `member`");
                          $stmt->execute();
                          $res = $stmt->fetch(PDO::FETCH_NUM);

                          echo $res[0];

                        ?>
                        </span>
                    </div>
                    <span class="info-box-icon"><i class="material-symbols-outlined">paid</i></span>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>

                 <div class="col-12 col-sm-6 col-md-4">
                  <div class="info-box bg-info mb-3">
              <div class="info-box-content">
                      <span class="info-box-text">Total due</span>
                      <span class="info-box-number"> 
                        <?php 
                          $stmt = $pdo->prepare("SELECT SUM(`total_due`) FROM `member`");
                          $stmt->execute();
                          $res = $stmt->fetch(PDO::FETCH_NUM);

                          echo $res[0];

                        ?>
                        </span>
                    </div>

     <span class="info-box-icon"><i class="material-symbols-outlined">
assignment_add</i></span>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
              </div>
       </div>
     </div>
                <!-- *************  table start here *********** -->
                <div class="card">
                    <div class="card-header bg-light border-bottom">
                      <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0" style="font-size: 1.25rem; color: #2c3e50;"><b>All Customer info</b></h3>
                        <button type="button" class="btn btn-primary float-right rounded-pill shadow-sm" 
                          style="transition: all 0.3s ease;
                          background: linear-gradient(to right, #4e73df, #224abe);
                          border: none;
                          font-size: 16px;
                          padding: 10px 24px;"
                          onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
                          onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                          data-toggle="modal" 
                          data-target=".myModal">
                          <i class="fas fa-plus"></i> Add New Customer
                        </button>
                      </div>
                    </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="empTable" class="display dataTable text-center">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>total buy</th>
                            <th>total paid</th>
                            <th>total due</th>
                            <th>action</th>
                          </tr>
                        </thead>
                          </table>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.row -->
                      </div><!--/. container-fluid -->
                    </section>
                    <!-- /.content -->
                  </div>
                  <!-- /.content-wrapper -->