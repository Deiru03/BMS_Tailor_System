<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main Content -->
  <section class="content mt-4">
    <div class="container-fluid">
      <div class="d-flex justify-content-between align-items-center mb-4"></div>
        <div class="card-header bg-white border-0">
          <h3 class="card-title mb-0" style="color: #4e73df; font-weight: 600;">
            <i class="fas fa-edit mr-2"></i>Edit Expense Details
          </h3>
        </div>

        <!-- Add Materials Button -->
        <div class="d-flex justify-content-center" style="margin-top: 30px;">
          <button 
            type="button" 
            class="btn btn-primary rounded-pill shadow-sm"
            data-toggle="modal" 
            data-target=".expenseCatModal"
            style="
              transition: all 0.3s ease;
              background: linear-gradient(to right, #4e73df, #224abe);
              border: none;
              font-size: 15px;
              padding: 10px 20px;"
            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';">
            <i class="fas fa-plus-circle mr-2"></i>Add Materials
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
                <!-- Submit Button -->
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
                  <i class="fas fa-save"></i> Save Changes
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
