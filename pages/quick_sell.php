<!-- Content Wrapper. Contains page content  -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 mt-3">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><!-- Dashboard v2 --></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">new sell</li>
            </ol> -->
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">

              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center justify-content-between">
                  <h3 class="card-title mb-0" style="font-size: 1.25rem; color: #2c3e50;"><b>Make a sales here</b></h3>
                  <button type="button" class="btn btn-primary float-right rounded-pill shadow-sm" 
                    style="transition: all 0.3s ease;
                    background: linear-gradient(to right, #4e73df, #224abe);
                    border: none;
                    font-size: 16px;
                    padding: 10px 24px;"
                    onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                    data-toggle="modal" 
                    data-target=".myModal">
                    <i class="fas fa-plus"></i> Add New Customer
                  </button>
                  </div>
                </div>
                <div class="card-body">

                  <form id="sellForm" onsubmit=" return false">
                    <div class="order-header">
                   <div class="row">
                     <div class="col-md-6  d-flex justify-content-start">
                        <div class="form-group" style="width: 80%;">
                          <label for="customer-name">Customer Name</label>
                            <select name="customer_name" id="customer_name" class="form-control select2">
                              <option selected disabled>Select a customer</option>
                              <?php 
                                $all_customer = $obj->all('member');

                                foreach ($all_customer as $customer) {
                                  ?>
                                    <option value="<?=$customer->id;?>"><?=$customer->name;?></option>
                                  <?php 
                                }
                              ?>
                            </select>
                        </div> 
                      <div class="d-flex align-items-center justify-content-end mt-3">
                        <!-- <button type="button" class="btn btn-primary rounded-pill shadow-sm" 
                          style="transition: all 0.3s ease;
                          background: linear-gradient(to right, #4e73df, #224abe);
                          border: none;
                          font-size: 14px;
                          padding: 8px 20px;"
                          onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
                          onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                          data-toggle="modal" 
                          data-target=".myModal">
                          <i class="fas fa-plus"></i> Add Customer
                        </button> -->
                      </div>
                      </div>

                      <div class="col-md-6 col-lg-6">
                        <label for="orderdate">Order Date</label>
                        <input type="text" class="form-control datepicker" name="orderdate" id="orderdate" autocomplete="off">
                      </div>
                    </div>
                  </div>
                 <div class="card p-4" style="background: #f1eaea40">
                    <table>
                      <thead>
                        <th>#</th>
                        <th>Product</th>
                        <th>Current Stock</th>
                        <th>Item Price</th>
                        <th>Order Quantity</th>
                        <th>Total Price</th>
                        <th>Product Name</th>
                        <th>Action</th>
                      </thead>
                    <tbody id="invoiceItem">
                      <!-- invoice item will show here by ajax  -->
                    </tbody>
                  </table>
                    <div class="form-group text-right mt-3">
                    <button type="button" class="btn btn-primary rounded-pill shadow-sm" 
                      style="transition: all 0.3s ease;
                      background: linear-gradient(to right, #4e73df, #224abe);
                      border: none;
                      font-size: 16px;
                      padding: 10px 24px;"
                      onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(78, 115, 223, 0.3)';"
                      onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                      id="addNewRowBtn">
                      <i class="fas fa-cart-plus"></i> Add New Item to Cart
                    </button>
                    </div>
                 </div>
                 <div class="invoice-area card pt-3" style="background: #f1eaea40">
                  <div class="row">
                    <div class="com-md-8 offset-md-2 col-lg-8 offset-lg-2">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="subtotal">Item Sub Total Amount</label>
                          </div> 
                          <div class="col-md-8">
                            <input type="number" class="form-control form-control-sm" name="subtotal" id="subtotal"></div>  
                        </div>
                     </div>
                     <input type="number" hidden="" class="form-control form-control-sm" name="s_discount_amount" id="s_discount_amount">
                     <input type="number" hidden="" class="form-control form-control-sm" name="discount" id="discount">
                     <!-- <div class="form-group">
                       <div class="row">
                         <div class="col-md-3">
                           <label for="discount">Discount %</label>
                         </div>
                         <div class="col-md-8">
                          <input type="number" class="form-control form-control-sm" name="discount" id="discount"></div>
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="row">
                         <div class="col-md-3">
                           <label for="s_discount_amount">Discount amount</label>
                         </div>
                         <div class="col-md-8">
                          <input type="number" class="form-control form-control-sm" name="s_discount_amount" id="s_discount_amount">
                        </div>
                       </div>
                     </div> -->
                      <div class="form-group">
                       <div class="row">
                         <div class="col-md-3">
                           <label for="prev_due">Previous Balance Amount</label>
                         </div>
                         <div class="col-md-8">
                          <input type="number" class="form-control form-control-sm" name="prev_due" id="prev_due">
                         </div>
                       </div>
                     </div>
                      <div class="form-group">
                       <div class="row">
                         <div class="col-md-3">
                           <label for="netTotal">Net Total Amount</label>
                         </div>
                         <div class="col-md-8">
                          <input type="number" class="form-control form-control-sm" name="netTotal" id="netTotal">
                         </div>
                       </div>
                     </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="paidBill">Payment Amount</label>
                          </div>
                          <div class="col-md-8">
                         <input type="number" class="form-control form-control-sm" name="paidBill" id="paidBill">
                       </div>
                        </div>
                      </div>
                      <div class="form-group">
                       <div class="row">
                         <div class="col-md-3">
                           <label for="dueBill">Balance Amount</label>
                         </div>
                         <div class="col-md-8">
                           <input type="text" class="form-control form-control-sm" name="dueBill" id="dueBill">
                         </div>
                       </div>
                       
                     </div>
                      <div class="form-group">
                       <div class="row">
                         <div class="col-md-3">
                           <label for="payMethode">Payment Method</label>
                         </div>
                         <div class="col-md-8">
                            <select name="payMethode" id="payMethode" class="form-control form-control-sm select2">
                             <option selected disabled>Select a payment method</option>
                              <?php 
                              $all_methode = $obj->all('paymethode');
                                foreach ($all_methode as $payMethode) {
                                  ?>  
                                    <option value="<?=$payMethode->name;?>"><?=$payMethode->name;?></option>
                                  <?php 
                                }?>
                       </select>
                         </div>
                       </div>
                     </div>
                     <div class="form-group text-center">
                       <button type="submit" class="btn btn-success btn-lg rounded-pill shadow-sm" 
                       style="transition: all 0.3s ease;
                       background: linear-gradient(to right, #28a745, #20c997);
                       border: none;
                       font-size: 16px;
                       padding: 12px 30px;
                       width: 100%;"
                       onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(40, 167, 69, 0.3)';"
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                       id="sellBtn">
                       <i class="fas fa-check-circle mr-2"></i> Complete Sale
                       </button>
                     </div>
                    </div>
                  </div>
                 </div>
                  </form>
                </div>
              </div>
            </div><!--/. container-fluid -->
          </section>
          <!-- /.content -->
        </div>
   

<!-- Success Modal -->
<div class="modal fade" id="salesSuccessModal" tabindex="-1" aria-labelledby="salesSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="salesSuccessModalLabel">Sales Success</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Your sale has been successfully processed!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="newSaleBtn">Create New Sale</button>
      </div>
    </div>
  </div>
</div>

<!-- Include Bootstrap JS (required for modal to work) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>