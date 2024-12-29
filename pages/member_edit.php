<!-- Content Wrapper -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid" style="margin-top: -10px;">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6 mt-4">
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content" style="margin-top: -50px;">
    <div class="container-fluid">
      <hr class="my-4">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-3">
          <div class="card shadow-sm">
            <?php 
            if (isset($_GET['edit_id'])) {
              $edit_id = $_GET['edit_id'];
              $data = $obj->find('member', 'id', $edit_id);

              if ($data) {
            ?>
              <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Update Customer Information</h4>
                  <h5 class="mb-0">ID: #<?=$data->member_id;?></h5>
                </div>
              </div>
              <div class="card-body p-4">
                <form id="editMemberForm">
                  <div class="form-group">
                    <label for="name" class="font-weight-bold">Name *</label>
                    <input type="text" class="form-control add-member" id="name" name="name" value="<?=$data->name;?>">
                    <input type="text" hidden name="id" value="<?=$edit_id;?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="company" class="font-weight-bold">Company *</label>
                    <input type="text" class="form-control add-member" id="company" name="company" value="<?=$data->company;?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="address" class="font-weight-bold">Address</label>
                    <textarea rows="3" class="form-control" id="address" name="address"><?=$data->address;?></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="contact" class="font-weight-bold">Contact Number *</label>
                    <input type="text" class="form-control add-member" id="contact" name="contact" value="<?=$data->con_num;?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" class="form-control add-member" id="email" name="email" value="<?=$data->email;?>">
                  </div>
                  
                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4" 
                        style="border-radius: 8px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
                        onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.25)';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';">
                    <i class="fas fa-save mr-2"></i>
                    Update Customer
                    </button>
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
  </section>
</div>
