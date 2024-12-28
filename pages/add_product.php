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
              <li class="breadcrumb-item active">Dashboard</li>
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
                  <div class="card-header">
                    
                      <div class="d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0" style="font-size: 1.25rem; color: #2c3e50;"><b>Add a new product</b></h3>
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
                          <i class="fas fa-plus"></i> Add New Category
                        </button>
                      </div>
                    </div>
                  <div class="card-body">
                     <div class="alert alert-primary alert-dismissible fade show addProductError-area" role="alert">
                        <span id="addProductError"></span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <form id="addProduct">
                          <div class="row">
                          <div class="col-md-6 ">
                            <div class="form-group">
                            <label for="product_name">Product name * :</label>
                            <input type="text" class="form-control" id="product_name" placeholder="Product name" name="product_name">
                          </div>
                         </div>
                          <div class="col-md-6">
                             <div class="form-group">
                            <label for="brand">Brand Name * :</label>
                            <input type="text" class="form-control" id="brand" placeholder="Brand name" name="brand">
                          </div>
                         </div>
                       </div>
                        
                          <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                <label for="p_catagory">Product catagory * :</label>
                                <select name="p_catagory" id="p_catagory" class="form-control select2">
                                  <option disabled selected>Select a catagory</option>
                                  <?php 
                                    $all_catgory = $obj->all('catagory');
                                    foreach ($all_catgory as $catagory) {
                                      ?>  
                                        <option value="<?=$catagory->id;?>"><?=$catagory->name;?></option>
                                      <?php 
                                    }
                                   ?>
                                </select>
                             </div>
                            </div>
                          
                         
                         <div class="col-md-6">
                             <div class="form-group">
                            <label for="product_source">Product source * :</label>
                            <select name="product_source" id="product_source" class="form-control select2">
                              <option value="factory">Factory</option>
                              <option value="buy">Buying</option>
                            </select>
                           </div>
                         </div>
                      </div>
                        <div class="row">
                          <div class="col-md-6">
                             <div class="form-group">
                            <label for="sku">SKU <span style="color: #444;">(Stock Keeping Unit)</span> :</label>
                            <input type="text" class="form-control" id="sku" placeholder="product SKU" name="sku">
                           </div>
                         </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="form-group">
                          <label for="quantity">Product Stock Quantity :</label>
                          <input type="number" class="form-control" id="quantity" placeholder="product quantity" name="quantity">
                        </div>
                      </div> 
                          <div class="col-md-6">
                            <div class="form-group">
                            <label for="alert_quantity">Stock Alert Threshold* <span style="color: #dc3545;">(System will notify when inventory falls below this level)</span>:</label>
                            <input type="number" class="form-control" id="alert_quantity" placeholder="Enter threshold value" name="alert_quantity">
                          </div>
                         </div>
                         </div>
                       <!--   <div class="col-md-4 col-lg-4">
                           <div class="form-group">
                            <label for="buy_price">Buying Price :</label>
                            <input type="number" class="form-control" id="buy_price" placeholder="buying price" name="buy_price">
                          </div>
                         </div> -->
                         <!--  <div class="col-md-4 col-lg-4">
                           <div class="form-group">
                            <label for="selling_price">Selling Price :</label>
                            <input type="number" class="form-control" id="selling_price" placeholder="selling price" name="selling_price">
                          </div>
                         </div> -->
                        
                           <div class="row text-center  buttons">
                            <div class="col-md-6 offset-md-3 col-lg-6 offset-lg-3 mt-4">
                              <button type="reset" class="btn btn-danger px-4 me-3 rounded-pill shadow-sm" 
                                  style="transition: all 0.3s ease;
                                  background: linear-gradient(to right, #dc3545, #c82333);
                                  border: none;
                                  font-size: 16px;
                                  padding: 10px 30px;
                                  width: 200px;
                                  height: 45px;"
                                  onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(220, 53, 69, 0.3)';"
                                  onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';">
                                  <i class="fas fa-undo-alt"></i> Reset Form
                              </button>
                              <button type="submit" class="btn btn-primary px-4 rounded-pill shadow-sm" 
                                  style="transition: all 0.3s ease;
                                  background: linear-gradient(to right, #4e73df, #224abe);
                                  border: none;
                                  font-size: 16px;
                                  padding: 10px 30px;
                                  width: 200px;
                                  height: 45px;"
                                  onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
                                  onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';">
                                  <i class="fas fa-save"></i> Add This Product
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    
                 </div>
                
                <!-- /.row -->
                </div><!--/. container-fluid -->
              </section>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper