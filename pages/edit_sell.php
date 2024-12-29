<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 mt-3">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"></h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="card shadow-sm rounded-lg">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">Make a sell here</h5>
        </div>

        <?php
        if (isset($_GET['edit_id'])) {
          $edit_id = $_GET['edit_id'];
          $sell_data = $obj->find('invoice', 'id', $edit_id);
          $all_invoice_detils_res = $obj->findWhere('invoice_details', 'invoice_no', $edit_id);
          if ($sell_data) {
        ?>
            <div class="card-header bg-light">
              <p class="mb-0"><strong>Invoice number:</strong> <?= $sell_data->invoice_number; ?></p>
            </div>
            <div class="card-body">
              <form id="editSellForm" onsubmit="return false">
                <!-- Customer Info Section -->
                <div class="order-header mb-4">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="font-weight-bold" for="customer-name">Customer name</label>
                        <select name="customer_name" id="customer_name" class="form-control select2">
                          <?php
                          $all_customer = $obj->all('member');
                          $select_val = $sell_data->customer_id;
                          foreach ($all_customer as $customer) {
                            $selected = ($select_val == $customer->id) ? 'selected' : '';
                          ?>
                            <option <?= $selected ?> value="<?= $customer->id; ?>"><?= $customer->name; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="font-weight-bold" for="orderdate">Order date</label>
                        <input type="text" class="form-control datepicker" name="orderdate" id="orderdate" autocomplete="off" value="<?= $sell_data->order_date; ?>">
                        <input type="text" hidden name="invoice_id" value="<?= $sell_data->id; ?>">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Products Table -->
                <div class="card shadow-sm mb-4">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover mb-0">
                        <thead class="bg-light">
                          <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Previous Stock</th>
                            <th>Item Price</th>
                            <th>Order Quantity</th>
                            <th>Total Price</th>
                            <th>Product Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="editInvoiceItem">
                          <!-- invoice item will show here by ajax  -->
                          <?php
                          foreach ($all_invoice_detils_res as $all_invoice_res) {
                          ?>
                            <input type="text" hidden name="up_pid[]" value="<?= $all_invoice_res->pid; ?>">
                            <input type="number" hidden name="up_quantity[]" value="<?= $all_invoice_res->quantity; ?>">
                            <tr>
                              <td><b class="si_number">1</b></td>
                              <td>
                                <input type="text" class="form-control form-control-sm pid" readonly id="product_name" name="pid[]" value="<?= $all_invoice_res->pid; ?>">
                              </td>
                              <td>
                                <input type="text" class="form-control form-control-sm qaty" placeholder="previous order Qty" name="prev_order_qty[]" id="prev_order_quantity" readonly value="50">
                              </td>
                              <td>
                                <input type="number" class="form-control form-control-sm price" placeholder="Price" name="price[]" id="price" value="<?= $all_invoice_res->price / $all_invoice_res->quantity; ?>">
                              </td>
                              <td>
                                <input type="number" class="form-control form-control-sm oqty" placeholder="Order Quantity" name="orderQuantity[]" value="<?= $all_invoice_res->quantity; ?>">
                              </td>
                              <td>
                                <input type="number" class="form-control form-control-sm tprice" placeholder="Total Price" name="totalPrice[]" id="totalPrice" readonly value="<?= $all_invoice_res->price ?>">
                              </td>
                              <td>
                                <input type="text" readonly class="form-control form-control-sm pro_name" name="pro_name[]" id="pro_name" value="<?= $all_invoice_res->product_name ?>">
                              </td>
                              <td>
                                <button type="button" class="btn btn-danger btn-sm pl-3 pr-3 cancelThisItem" id="cancelThisItem"><i class="fas fa-times"></i></button>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
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
                          id="EditaddNewRowBtn">
                          <i class="fas fa-cart-plus"></i> Add New Item
                        </button>
                        </div>
                    </div>
                    <div class="invoice-area card pt-3" style="background: #f1eaea40">
                      <div class="row">
                        <div class="com-md-8 offset-md-2 col-lg-8 offset-lg-2">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-3">
                                <label for="subtotal">Subtoal</label>
                              </div>
                              <div class="col-md-8">
                                <input type="number" class="form-control form-control-sm" name="subtotal" id="subtotal" value="<?= $sell_data->sub_total; ?>">
                              </div>
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
                                <input type="number" class="form-control form-control-sm" name="prev_due" id="prev_due" value="<?= $sell_data->pre_cus_due; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-3">
                                <label for="netTotal">Net Total Amount</label>
                              </div>
                              <div class="col-md-8">
                                <input type="number" class="form-control form-control-sm" name="netTotal" id="netTotal" value="<?= $sell_data->net_total; ?>">
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
                                  <option selected disabled>Select a payment methode</option>
                                  <?php
                                  $all_methode = $obj->all('paymethode');
                                  foreach ($all_methode as $payMethode) {
                                  ?>
                                    <option value="<?= $payMethode->name; ?>"><?= $payMethode->name; ?></option>
                                  <?php
                                  } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                            <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-lg rounded-pill shadow-sm"
                              style="transition: all 0.3s ease;
                              background: linear-gradient(to right,rgb(40, 85, 167),rgb(32, 162, 201));
                              border: none;
                              font-size: 20px;
                              padding: 12px 15px;
                              width: 50%;"
                              onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(40, 167, 69, 0.3)';"
                              onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)';"
                              id="editSellBtn">
                              <i class="fas fa-check-circle mr-2"></i> Confirm Edit Sales
                            </button>
                            </div>
                        </div>
                      </div>
                    </div>
              </form>
            </div>

          <?php
          } else {
          ?>
            <div class="alert alert-danger m-4">No data found for edit</div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>
</div>