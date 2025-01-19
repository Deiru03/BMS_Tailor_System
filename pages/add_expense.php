<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-5">
  <!-- Main content -->
  <section class="content mt-5">
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-3">
          <div class="card">
            <!-- Card Header -->
            <div class="card-header">
              <h3 class="card-title"><b>Add Material</b></h3>
              <button type="button" class="btn btn-primary float-right rounded-pill shadow-sm"
                style="transition: all 0.3s ease;
                        background: linear-gradient(to right, #4e73df, #224abe);
                        border: none;
                        font-size: 16px;
                        padding: 10px 24px;"
                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                data-toggle="modal"
                data-target=".expenseCatModal">
                <i class="fas fa-plus"></i> Add Material Category
              </button>
              <div class="mr-10">
                
              </div>
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

            <!-- Card Body -->
            <div class="card-body">
              <form id="addExpenseForm">

                <!-- Row 1: Date and Expense For -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="expense_date">Date</label>
                      <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="addon-wrapping">
                            <i class="fas fa-calendar-week"></i>
                          </span>
                        </div>
                        <input 
                          type="text" 
                          class="form-control datepicker" 
                          id="expense_date" 
                          name="expense_date" 
                          aria-describedby="addon-wrapping">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="expense_for">Expense For *</label>
                      <input 
                        type="text" 
                        class="form-control" 
                        id="expense_for" 
                        name="expense_for" 
                        placeholder="Expense for">
                    </div>
                  </div>
                </div>
                <!-- Row: Supplier and Input -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="supplier">Supplier</label>
                      <select name="supplier" id="supplier" class="form-control select2">
                        <?php 
                          $all_suppliers = $obj->all('suppliar');
                          foreach ($all_suppliers as $supplier) {
                        ?>
                        <option value="<?=$supplier->name?>"><?=$supplier->name;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- Row 2: Materials Category and Price -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="expense_catagory">Materials Category</label>
                      <select 
                        name="expense_catagory" 
                        id="expense_catagory" 
                        class="form-control select2">
                        <?php 
                          $all_ex_cat = $obj->all('expense_catagory');
                          foreach ($all_ex_cat as $ex_cat) {
                        ?>
                        <option value="<?=$ex_cat->id?>"><?=$ex_cat->name;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="expense_amount">Price</label>
                      <input 
                        type="number" 
                        class="form-control" 
                        id="expense_amount" 
                        name="expense_amount" 
                        placeholder="Price">
                    </div>
                  </div>
                </div>

                <!-- Row 3: Quantity Type and Description -->
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="exp_descrip">Quantity type</label>
                      <textarea 
                        rows="3" 
                        class="form-control" 
                        id="exp_descrip" 
                        name="exp_descrip"></textarea>
                    </div>
                  </div>
                </div>
                <!-- Submit Button -->
                <div class="form-group d-flex justify-content-center">
                    <button 
                    type="submit" 
                    class="btn btn-primary mt-4 rounded-pill shadow-sm"
                    style="transition: all 0.3s ease;
                      background: linear-gradient(to right, #4e73df, #224abe);
                      border: none;
                      font-size: 16px;
                      padding: 12px 24px;
                      width: 200px;
                      text-align: center;"
                    onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                    onclick="setTimeout(function() { window.location.href = 'index.php?page=exspense_list'; }, 1000);">
                    <i class="fas fa-plus-circle"></i> Save Material
                    </button>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
