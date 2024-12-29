<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center mb-4">Payment Processing</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <?php 
        if (isset($_GET['id']) && $_GET['id'] != '') {
          $edit_id = $_GET['id'];
          $data = $obj->find('member', 'id', $edit_id);

          if ($data) {
        ?>
          <div class="col-md-12">
            <!-- Customer Info Card -->
            <div class="card shadow-sm mb-4">
              <div class="card-header bg-primary text-white">
                <h3 class="text-center m-0">Sell Payments</h3>
              </div>
              <div class="card-body bg-light">
                <div class="row">
                  <div class="col-md-6">
                    <div class="p-3 border rounded bg-white">
                      <h4 class="text-primary mb-3"><i class="fas fa-user mr-2"></i>Customer Information</h4>
                      <div class="ml-3">
                        <p class="mb-2"><strong>Name:</strong> <?=$data->name;?></p>
                        <p class="mb-2"><strong>Company:</strong> <?=$data->company;?></p>
                        <p class="mb-2"><strong>Address:</strong> <?=$data->address;?></p>
                        <p class="mb-2"><strong>Contact:</strong> <?=$data->con_num;?></p>
                        <p class="mb-2"><strong>Email:</strong> <?=$data->email;?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Payment Form Card -->
            <div class="card shadow-sm">
              <div class="card-body">
                <form id="sell_payForm" class="p-3">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="payment_date" class="font-weight-bold">Payment Date</label>
                        <input type="text" hidden name="customer_id" value="<?=$data->id;?>">
                        <input type="text" class="form-control datepicker" id="payment_date" name="payment_date" placeholder="Select date" autocomplete="off">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="spay_amount" class="font-weight-bold">Amount</label>
                        <input type="number" class="form-control" id="spay_amount" name="pay_amount" value="<?=$data->total_due;?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="spay_type" class="font-weight-bold">Payment Type</label>
                        <select name="pay_type" id="spay_type" class="form-control">
                          <?php 
                          $all_pay_type = $obj->all('paymethode');
                          foreach ($all_pay_type as $paymethode) {
                          ?>
                            <option value="<?=$paymethode->name?>"><?=$paymethode->name?></option>
                          <?php 
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pay_descrip" class="font-weight-bold">Description</label>
                    <textarea rows="3" class="form-control" id="pay_descrip" name="pay_descrip" placeholder="Enter payment details..."></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Process Payment</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php 
          } else {
            header("location:index.php?page=member");
          }
        } else {
          header("location:index.php?page=member");
        }
        ?>
      </div>
    </div>
  </section>
</div>
