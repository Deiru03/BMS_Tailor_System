<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><!-- Dashboard v2 --></h1>
        </div><!-- /.col -->
        <div class="col-sm-6 mt-4">
          <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
              <li class="breadcrumb-item active">Edit Products</li>
            </ol> -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.card-header -->
      <hr>
      <div class="row">
        <div class="col-md-12 col-lg-12 mt-3">
          <div class="card">
            <div class="card-body">
              <?php
              if (isset($_GET['edit_id'])) {
                $edit_id = $_GET['edit_id'];
                $data = $obj->find('products', 'id', $edit_id);

                if ($data) {
              ?>
                  <form id="editProduct">
                    <div class="row">
                      <!-- Basic Information -->
                      <div class="col-md-12">
                        <h5>Basic Information</h5>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="product_name">Product name * :</label>
                          <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $data->product_name; ?>">
                          <input type="text" hidden name="id" value="<?= $edit_id; ?>">
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="brand">Brand Name * :</label>
                          <input type="text" class="form-control" id="brand" value="<?= $data->brand_name; ?>" name="brand">
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="p_catagory">Product catagory * :</label>
                          <select name="p_catagory" id="p_catagory" class="form-control select2">
                            <option disabled selected>Select a catagory</option>
                            <?php
                            $all_catgory = $obj->all('catagory');
                            $select_val = $data->catagory_id;
                            foreach ($all_catgory as $catagory) {
                              $selected = ($select_val == $catagory->id) ? 'selected' : '';
                            ?>
                              <option <?= $selected; ?> value="<?= $catagory->id; ?>"><?= $catagory->name; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="product_source">Product source * :</label>
                          <select name="product_source" id="product_source" class="form-control select2">
                            <option <?php if ($data->product_source == 'factory') echo "selected"; ?> value="factory">Factory</option>
                            <option <?php if ($data->product_source == 'buy') echo "selected"; ?> value="buy">Buying</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Inventory Information -->
                      <div class="col-md-12">
                        <h5>Inventory Information</h5>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="sku">SKU * :</label>
                          <input type="text" class="form-control" readonly id="sku" value="<?= $data->sku; ?>" name="sku">
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="quantity">Product Stock Quantity* :</label>
                          <input type="number" class="form-control" id="quantity" value="<?= $data->quantity; ?>" name="quantity">
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="alert_quantity">Low Stock Alert Quantity* :</label>
                          <input type="number" class="form-control" id="alert_quantity" name="alert_quantity" value="<?= $data->alert_quanttity; ?>">
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <!-- Pricing Information -->
                      <div class="col-md-12">
                        <h5>Pricing Information</h5>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="buy_price">Buying Price * :</label>
                          <input type="number" class="form-control" readonly id="buy_price" value="<?= $data->buy_price; ?>" name="buy_price">
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                          <label for="selling_price">Product Price * :</label>
                          <input type="number" class="form-control" id="selling_price" value="<?= $data->sell_price; ?>" name="selling_price">
                        </div>
                      </div>
                    </div>
                    <div class="row mt-5">
                      <div class="col-md-6 offset-md-3 col-lg-6 offset-lg-3 text-center">
                      <div class="update-product-container">
                        <label for="updateProductBtn" class="update-label">Click the button to the below to Update Product</label>
                        <button
                        id="updateProductBtn"
                        type="submit"
                        class="btn custom-btn">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Update Product
                        </button>
                      </div>
                      </div>
                    </div>
                    <style>
                      .update-product-container {
                      padding: 20px;
                      border-radius: 10px;
                      background: rgba(255, 255, 255, 0.9);
                      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
                      }

                      .update-label {
                      font-size: 1.2rem;
                      font-weight: 600;
                      color: #2c3e50;
                      margin-bottom: 15px;
                      text-transform: uppercase;
                      letter-spacing: 1px;
                      }

                      .custom-btn {
                      padding: 12px 40px;
                      font-size: 1.1rem;
                      font-weight: 500;
                      color: #fff;
                      background: linear-gradient(135deg, #2196F3, #1976D2);
                      border: none;
                      border-radius: 5px;
                      transition: all 0.3s ease;
                      }

                      .custom-btn:hover {
                      background: linear-gradient(135deg, #1976D2, #0D47A1);
                      transform: translateY(-2px);
                      box-shadow: 0 5px 15px rgba(33, 150, 243, 0.4);
                      }

                      .custom-btn:active {
                      transform: translateY(0);
                      box-shadow: 0 2px 8px rgba(33, 150, 243, 0.4);
                      }
                    </style>
                  </form>

              <?php
                } else {
                  header("location:index.php?page=error_page");
                }
              }
              ?>
            </div>
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
<!-- /.content-wrapper