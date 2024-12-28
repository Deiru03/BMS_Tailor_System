<div class="content-wrapper bg-light">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-md-6">
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card shadow-lg">
            <div class="card-header bg-gradient-primary text-white">
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="card-title mb-0"><i class="fas fa-box-open mr-2"></i>Add New Product</h3>
                <button type="button" class="btn btn-light rounded-pill"
                  data-toggle="modal"
                  data-target=".catagoryModal">
                  <i class="fas fa-plus"></i> Add New Category
                </button>
              </div>
            </div>

            <div class="card-body bg-light">
              <div class="alert alert-primary alert-dismissible fade show addProductError-area" role="alert">
                <span id="addProductError"></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form id="addProduct" class="needs-validation">
                <div class="row g-4">
                  <!-- Product Details Section -->
                  <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                      <div class="card-header bg-light">
                        <h5 class="mb-0">Basic Information</h5>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label class="form-label fw-bold">Product Name *</label>
                          <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name">
                        </div>
                        <div class="form-group">
                          <label class="form-label fw-bold">Brand Name *</label>
                          <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand name">
                        </div>
                        <div class="form-group">
                          <label class="form-label fw-bold">Category *</label>
                          <select name="p_catagory" id="p_catagory" class="form-control select2">
                            <option disabled selected>Select a category</option>
                            <?php
                            $all_catgory = $obj->all('catagory');
                            foreach ($all_catgory as $catagory) {
                            ?>
                              <option value="<?= $catagory->id; ?>"><?= $catagory->name; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                        <!-- Commented out Product Source
            <div class="form-group">
              <label class="form-label fw-bold">Product Source *</label>
              <select name="product_source" id="product_source" class="form-control select2">
                <option value="factory">Factory</option>
                <option value="buy">Buying</option>
              </select>
            </div>
            -->
                      </div>
                    </div>
                  </div>

                  <!-- Inventory Section -->
                  <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                      <div class="card-header bg-light">
                        <h5 class="mb-0">Inventory Details</h5>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label class="form-label fw-bold">SKU <small>(Stock Keeping Unit for product)</small></label>
                          <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter product SKU">
                        </div>
                        <div class="form-group">
                          <label class="form-label fw-bold">Stock Quantity</label>
                          <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
                        </div>
                        <div class="form-group">
                          <label class="form-label fw-bold">Alert Threshold *</label>
                          <input type="number" class="form-control" id="alert_quantity" name="alert_quantity" placeholder="Enter threshold value">
                          <small class="text-danger">System will notify when inventory falls below this level</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Action Buttons -->
                <div class="row mt-4">
                  <div class="col-12 text-center">
                    <button type="reset" class="btn custom-btn custom-btn-danger btn-lg px-5 me-3">
                      <i class="fas fa-undo-alt me-2"></i> Reset
                    </button>
                    <button type="submit" class="btn custom-btn custom-btn-primary btn-lg px-5">
                      <i class="fas fa-save me-2"></i> Save or Add Product
                    </button>
                  </div>

                  <style>
                  .custom-btn {
                    padding: 12px 30px;
                    border-radius: 5px;
                    font-weight: 600;
                    transition: all 0.3s ease;
                    border: none;
                    position: relative;
                    overflow: hidden;
                  }

                  .custom-btn-primary {
                    background: linear-gradient(135deg, #4e73df, #224abe);
                    color: white;
                  }

                  .custom-btn-danger {
                    background: linear-gradient(135deg, #e74a3b, #be2617);
                    color: white;
                  }

                  .custom-btn:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                  }

                  .custom-btn:active {
                    transform: translateY(-1px);
                  }

                  .custom-btn-primary:hover {
                    background: linear-gradient(135deg, #224abe, #4e73df);
                  }

                  .custom-btn-danger:hover {
                    background: linear-gradient(135deg, #be2617, #e74a3b);
                  }
                  </style>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      .card {
        border-radius: 15px;
        border: none;
      }

      .card-header {
        border-radius: 15px 15px 0 0 !important;
      }

      .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 0.75rem;
        transition: all 0.2s;
      }

      .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
      }

      /* .btn {

        .btn:hover {
          transform: translateY(-2px);
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .select2-container--default .select2-selection--single {
          height: 45px;
          border-radius: 8px;
          border: 1px solid #ced4da;
        }
        border: 1px solid #ced4da;
      } */
        </style>
      </section>
  </section>
</div>