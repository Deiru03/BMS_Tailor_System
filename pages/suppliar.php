<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-md-6">
          <!-- <h1 class="m-0 text-dark">Supplier</h1> -->
        </div><!-- /.col -->
        <div class="col-md-6 mt-3">
          <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Supplier</li>
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
        <div class="row mb-2" style="margin-top: 20px; margin-left: 20px;">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box bg-primary mb-3">
              <div class="info-box-content">
                <span class="info-box-text">Total Suppliers</span>
                <span class="info-box-number">
                  <?php
                  $stmt = $pdo->prepare("SELECT COUNT(*) FROM suppliar");
                  $stmt->execute();
                  $res = $stmt->fetch(PDO::FETCH_NUM);
                  echo $res[0];
                  ?>
                </span>
              </div>
              <span class="info-box-icon"><i class="fas fa-truck"></i></span>
            </div>
          </div>
        </div>
        <!-- *************  table start here *********** -->
        <div class="card">
          <div class="card-header bg-light border-bottom">
            <div class="d-flex align-items-center justify-content-between">
              <h3 class="card-title mb-0" style="font-size: 1.25rem; color: #2c3e50;"><b>All Supplier info</b></h3>
              <button type="button" class="btn btn-primary float-right rounded-pill shadow-sm"
                style="transition: all 0.3s ease;
                        background: linear-gradient(to right, #4e73df, #224abe);
                        border: none;
                        font-size: 16px;
                        padding: 10px 24px;"
                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                data-toggle="modal"
                data-target=".suppliarModal">
                <i class="fas fa-plus"></i> Add New Supplier
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="suppliarTable" class="display dataTable text-center">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <!-- <th class="hidden">total buy</th>
                            <th class="hidden">total paid</th>
                            <th class="hidden">total due</th> -->
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