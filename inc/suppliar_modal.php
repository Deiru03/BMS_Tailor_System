<!-- The Modal for add new form -->
<div class="modal fade bd-example-modal-xl suppliarModal" id="suppliarModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content rounded-lg shadow">
      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h4 class="modal-title font-weight-bold"><i class="fas fa-user-plus mr-2"></i>Add New Supplier</h4>
        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body p-4">
        <div class="alert alert-primary alert-dismissible fade show memberFormError" role="alert">
          <span id="cuppliarFormError"></span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="adsuppliarForm">
          <div class="row">
            <div class="col-md-6 col-lg-6 mb-3">
              <div class="form-group">
                <label for="sup_name" class="font-weight-bold">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-lg" id="sup_name" placeholder="Enter supplier name" name="sup_name">
              </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <div class="form-group">
                <label for="sup_company" class="font-weight-bold">Company</label>
                <input type="text" class="form-control form-control-lg" id="sup_company" placeholder="Enter company name" name="sup_company">
              </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <div class="form-group">
                <label for="sup_contact" class="font-weight-bold">Contact Number</label>
                <input type="text" class="form-control form-control-lg" id="sup_contact" placeholder="Enter contact number" name="sup_contact">
              </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
              <div class="form-group">
                <label for="sup_email" class="font-weight-bold">Email</label>
                <input type="email" class="form-control form-control-lg" id="sup_email" placeholder="Enter email address" name="sup_email">
              </div>
            </div>
            <!-- <div class="col-md-6 col-lg-6 mb-3">
              <div class="form-group">
                <label for="sup_open_blacnce" class="font-weight-bold">Previous Due</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="number" class="form-control form-control-lg" name="sup_open_blacnce" id="sup_open_blacnce" value="0.00">
                </div>
              </div>
            </div> -->
            <div class="col-md-6 col-lg-6 mb-3">
              <div class="form-group">
                <label for="sup_reg_date" class="font-weight-bold">Registration Date</label>
                <input type="date" class="form-control form-control-lg" id="sup_reg_date" name="sup_reg_date">
              </div>
            </div>
            <div class="col-md-12 col-lg-12 mb-3">
              <div class="form-group">
                <label for="supaddress" class="font-weight-bold">Address</label>
                <textarea rows="3" class="form-control form-control-lg" placeholder="Enter complete address" id="supaddress" name="supaddress"></textarea>
              </div>
            </div>
          </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill shadow-sm mt-4 hover-btn" style="transition: all 0.3s ease;">
            <i class="fas fa-save mr-2"></i>Add This Supplier
            </button>
            <style>
            .hover-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3) !important;
            background-color: #0056b3 !important;
            }
            </style>
        </form>
      </div>
    </div>
  </div>
</div>