<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h1 class="m-0 text-dark"><!-- Dashboard v2 --></h1>
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
      <!-- .row -->

      <div class="card">
        <div class="card-header bg-light border-bottom">
          <div class="d-flex align-items-center justify-content-between">
            <h3 class="card-title mb-0" style="font-size: 1.25rem; color: #2c3e50;"><b>Category List</b></h3>
            <button type="button" class="btn btn-primary float-right rounded-pill shadow-sm"
              style="transition: all 0.3s ease;
                  background: linear-gradient(to right, #4e73df, #224abe);
                  border: none;
                  font-size: 16px;
                  padding: 10px 24px;"
              onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
              data-toggle="modal"
              data-target=".catagoryModal">
              <i class="fas fa-plus"></i> Add Category
            </button>
          </div>
        </div>

        <div class="row mb-2" style="margin-top: 20px; margin-left: 20px;">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box bg-primary mb-3">
              <div class="info-box-content">
                <span class="info-box-text">Total Categories</span>
                <span class="info-box-number">
                  <?php
                  $stmt = $pdo->prepare("SELECT COUNT(*) FROM catagory");
                  $stmt->execute();
                  $res = $stmt->fetch(PDO::FETCH_NUM);
                  echo $res[0];
                  ?>
                </span>
              </div>
              <span class="info-box-icon"><i class="fas fa-tags"></i></span>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <div class="table-responsive">
              <table id="catagoryTable" class="display dataTable text-center">
                <thead>
                  <tr>
                    <th>SI</th>
                    <th>Catagory name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->