<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><!-- Dashboard v2 --></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Catagory</li>
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
          <div class="d-flex align-items-center justify-content-between">
            <h3 class="card-title mb-0" style="font-size: 1.25rem; color: #2c3e50;"><b>All Product List</b></h3>
            <a href="index.php?page=add_product"
              class="btn btn-primary float-right rounded-pill shadow-sm"
              style="transition: all 0.3s ease;
                          background: linear-gradient(to right, #4e73df, #224abe);
                          border: none;
                          font-size: 14px;
                          padding: 10px 24px;
                          text-decoration: none;"
              onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(76, 175, 80, 0.3)';"
              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';">
              <i class="fas fa-plus"></i>  Add a New Product
            </a>
          </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table id="productTable" class="display dataTable text-center">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Product name</th>
                  <th>Brand</th>
                  <th>Category</th>
                  <!-- <th style="display: none;">Source</th> -->
                  <th>Current Stock</th>
                  <th>Stock Level <br> <small>(Alert Quantity)</small></th>
                  <th>Selling Price</th>
                  <th>Action</th>
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