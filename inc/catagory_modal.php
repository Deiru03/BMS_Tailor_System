<div class="modal fade catagoryModal" id="catagoryModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h4 class="modal-title">Add New Category</h4>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="alert alert-primary alert-dismissible fade show catWarning-area" role="alert">
          <span id="catWarning"></span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="addCatForm">
          <div class="form-group">
            <div class="form-group">
              <label for="cat_name" class="font-weight-bold">Category Name</label>
              <input type="text" class="form-control shadow-sm" id="cat_name" name="cat_name" 
                placeholder="Enter category name">
            </div>
            <div class="form-group">
              <label for="cat_descrip" class="font-weight-bold">Category Description</label>
              <textarea rows="3" class="form-control shadow-sm" id="cat_descrip" name="cat_descrip" 
                placeholder="Enter category description"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 shadow">
                <i class="fas fa-plus-circle mr-2"></i>Create Category
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
