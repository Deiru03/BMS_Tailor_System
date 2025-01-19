<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main Content -->
  <section class="content mt-5">
    <div class="container-fluid">
      <div class="card-header">
        <h3 class="card-title mt-3">Add Category</h3>
      </div>

      <!-- Add Materials Button -->
      <div class="col-lg-4 mb-3">
        <div class="form-group text-right">
          <button type="button" class="btn btn-primary rounded-0" data-toggle="modal" data-target=".expenseCatModal">
            <i class="fas fa-plus"></i> Add Materials
          </button>
        </div>
      </div>

      <!-- Form Section -->
      <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-3">
          <div class="card">
            <div class="card-body">
              <?php 
                if (isset($_GET['edit_id'])) {
                  $edit_id = $_GET['edit_id'];
                  $expense_data = $obj->find('expense', 'id', $edit_id);

                  if ($expense_data) {
              ?>
              <form id="editExpenseForm">
                <!-- Expense Date -->
                <div class="form-group">
                  <label for="expense_date">Expense Date</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                    </div>
                    <input 
                      type="text" 
                      class="form-control datepicker" 
                      id="expense_date" 
                      name="expense_date" 
                      value="<?=$expense_data->ex_date;?>">
                  </div>
                </div>

                <!-- Expense For -->
                <div class="form-group">
                  <label for="expense_for">Expense For *</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    id="expense_for" 
                    name="expense_for" 
                    placeholder="Expense for" 
                    value="<?=$expense_data->expense_for;?>">
                  <input type="hidden" name="id" value="<?=$expense_data->id?>">
                </div>

                <!-- Supplier -->
                <div class="form-group">
                  <label for="supplier">Supplier</label>
                  <select name="supplier" id="supplier" class="form-control select2">
                    <?php 
                      $all_suppliers = $obj->all('suppliar');
                      $selected_val = $expense_data->supplier;
                      if ($selected_val == '
                      ') {
                        echo '<option value="">Select Supplier</option>';
                      }
                      else if ($selected_val == '
                      ') {
                        echo '<option value="">Select Supplier</option>';
                      }
                      else if ($selected_val == 'selected') {
                        echo 'selected';
                      }
                      else {
                        echo '';
                      }
                      ?>
                    <option value="">Select Supplier</option>
                    <?php 
                      foreach ($all_suppliers as $supplier) {
                        $selected = $selected_val == $supplier->id ? 'selected' : '';
                    ?>
                    <option 
                      value="<?=$supplier->name?>" 
                      <?=$selected?>>
                      <?=$supplier->name;?>
                    </option>
                    <?php } ?>
                  </select>
                </div>

                <!-- Materials Category -->
                <div class="form-group">
                  <label for="expense_catagory">Materials Category</label>
                  <select 
                    name="expense_catagory" 
                    id="expense_catagory" 
                    class="form-control select2">
                    <?php 
                      $all_cat = $obj->all('expense_catagory');
                      $selected_val = $expense_data->expense_cat;

                      foreach ($all_cat as $expense_catagory) {
                        $selected = $selected_val == $expense_catagory->id ? 'selected' : '';
                    ?>
                    <option 
                      value="<?=$expense_catagory->id?>" 
                      <?=$selected?>>
                      <?=$expense_catagory->name;?>
                    </option>
                    <?php } ?>
                  </select>
                </div>

                <!-- Price -->
                <div class="form-group">
                  <label for="expense_amount">Price</label>
                  <input 
                    type="number" 
                    class="form-control" 
                    id="expense_amount" 
                    name="expense_amount" 
                    placeholder="Price" 
                    value="<?=$expense_data->amount;?>">
                </div>

                <!-- Description -->
                <div class="form-group">
                  <label for="exp_descrip">Quantity type</label>
                  <textarea 
                    rows="3" 
                    class="form-control" 
                    id="exp_descrip" 
                    name="exp_descrip"><?=$expense_data->ex_description;?></textarea>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                  <button 
                    type="submit" 
                    class="btn btn-primary btn-block mt-4 rounded-0">
                    Update
                  </button>
                </div>
              </form>
              <?php 
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
