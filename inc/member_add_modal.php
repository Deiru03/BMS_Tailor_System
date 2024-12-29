<!-- The Modal for add new form -->
<div class="modal fade bd-example-modal-xl myModal" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h4 class="modal-title font-weight-bold">Add New Customer</h4>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body p-4">
        <div class="alert alert-primary alert-dismissible fade show memberFormError" role="alert">
          <span id="memberFormError"></span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="adMemberForm" class="needs-validation">
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="name" class="font-weight-bold">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control add-member shadow-sm" id="name" placeholder="Enter member name" name="name">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="company" class="font-weight-bold">Company</label>
                <input type="text" class="form-control add-member shadow-sm" id="company" placeholder="Enter company name" name="company">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="contact" class="font-weight-bold">Contact Number</label>
                <input type="text" class="form-control add-member shadow-sm" id="contact" placeholder="Enter contact number" name="contact">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="email" class="form-control add-member shadow-sm" id="email" placeholder="Enter email address" name="email">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="cus_open_blacnce" class="font-weight-bold">Previous Due</label>
                <input type="number" class="form-control shadow-sm" name="cus_open_blacnce" id="cus_open_blacnce" value="0.00">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="reg_date" class="font-weight-bold">Registration Date</label>
                <input type="date" class="form-control add-member shadow-sm" id="reg_date" name="reg_date">
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label for="address" class="font-weight-bold">Address</label>
                <textarea rows="3" class="form-control shadow-sm" placeholder="Enter complete address" id="address" name="address"></textarea>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block shadow">Add Customer</button>
        </form>
      </div>
    </div>
  </div>
</div>
