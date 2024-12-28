<div class="modal fade expenseCatModal" id="expenseCatModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">
      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h4 class="modal-title">Add New Materials</h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body p-4">
        <div class="alert alert-primary alert-dismissible fade show catWarning-area" role="alert">
          <span id="catWarning"></span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="addexpenseCat">
          <div class="form-group mb-4">
            <label for="expense_catName" class="font-weight-bold">Materials Category Name</label>
            <input type="text" class="form-control form-control-lg" id="expense_catName" name="expense_catName" placeholder="Enter category name">
          </div>

          <div class="form-group mb-4">
            <label for="expesecatDescrip" class="font-weight-bold">Description</label>
            <textarea rows="3" class="form-control" id="expesecatDescrip" name="expesecatDescrip" placeholder="Enter description"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block shadow-sm">Add This New Category</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>