<!-- Content Wrapper. Contains page content  -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-md-6 mt-4">
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-3">
          <div class="card shadow-sm">
            <?php 
            if (isset($_GET['edit_id'])) {
              $edit_id = $_GET['edit_id'];
              $data = $obj->find('suppliar', 'id', $edit_id);

              if ($data) {
            ?>
              <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Update Supplier</h4>
                  <h5 class="mb-0">ID: #<?=$data->suppliar_id;?></h5>
                </div>
              </div>
              <div class="card-body p-4">
                <form id="editSuppliarForm">
                  <div class="form-group">
                    <label for="name" class="font-weight-bold">Name *</label>
                    <input type="text" class="form-control add-member rounded" id="name" name="name" value="<?=$data->name;?>">
                    <input type="text" hidden name="id" value="<?=$edit_id;?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="company" class="font-weight-bold">Company *</label>
                    <input type="text" class="form-control add-member rounded" id="company" name="company" value="<?=$data->company;?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="address" class="font-weight-bold">Address</label>
                    <textarea rows="3" class="form-control rounded" id="address" name="address"><?=$data->address;?></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="contact" class="font-weight-bold">Contact Number *</label>
                    <input type="text" class="form-control add-member rounded" id="contact" name="contact" value="<?=$data->con_num;?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="email" class="font-weight-bold">Email</label>
                    <input type="email" class="form-control add-member rounded" id="email" name="email" value="<?=$data->email;?>">
                  </div>
                  
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
                    onclick="setTimeout(function() { window.location.href = 'index.php?page=suppliar'; }, 1000);">
                    <i class="fas fa-plus-circle"></i> Save Changes
                    </button>
                </form>
              </div>
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
