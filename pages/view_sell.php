<style>

@page {
  margin-top:  150px;
  margin-bottom:   100px;
}

  @media print {
body{
  font-size: 12px;
}
   .view_sell_payment_info {
    display: none;
}
.view_sell_button-area {
    display: none;
}
footer.main-footer {
    display: none;
}
.card.view_sell_page_info {
    margin-top: 100px;
}
}
</style>
<!-- Content Wrapper. Contains page content  -->
<div class="content-wrapper">
 <!-- Main content -->
  <section class="content mt-5">
    <div class="container-fluid">
      <div class="card view_sell_page_info">
        <div class="card-header" style="background: linear-gradient(45deg, #2c3e50, #3498db); color: white; padding: 15px 20px; border-radius: 5px 5px 0 0;">
          <h3 class="card-title mb-0">
            <i class="fas fa-shopping-cart mr-2"></i>
            Sales Information
          </h3>
        </div>
        <div class="card-body">
         <?php 
            if (isset($_GET['view_id'])) {
             $view_id = $_GET['view_id'];
                $sell_total = $obj->find('invoice','id',$view_id);

               $customer = $sell_total->customer_id;
              $customer = $obj->find('member','id',$customer);
                if ($sell_total) {
                  ?>
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="purchase-suppliar-info" style="background: #f8f9fa; padding: 20px; width: 100%; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                      <h4 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
                        <i class="fas fa-user"></i> Customer Information
                      </h4>
                      <div class="customer-details" style="margin-top: 15px;">
                        <p style="margin-bottom: 8px;">
                        <span style="color: #7f8c8d; width: 100px; display: inline-block;"><i class="fas fa-user-circle"></i> Name:</span>
                        <span style="color: #2c3e50; font-weight: 600;"><?=$customer->name;?></span>
                        </p>
                        <p style="margin-bottom: 8px;">
                        <span style="color: #7f8c8d; width: 100px; display: inline-block;"><i class="fas fa-building"></i> Company:</span>
                        <span style="color: #2c3e50;"><?=$customer->company;?></span>
                        </p>
                        <p style="margin-bottom: 8px;">
                        <span style="color: #7f8c8d; width: 100px; display: inline-block;"><i class="fas fa-map-marker-alt"></i> Address:</span>
                        <span style="color: #2c3e50;"><?=$customer->address;?></span>
                        </p>
                        <p style="margin-bottom: 8px;">
                        <span style="color: #7f8c8d; width: 100px; display: inline-block;"><i class="fas fa-phone"></i> Phone:</span>
                        <span style="color: #2c3e50;"><?=$customer->con_num;?></span>
                        </p>
                        <p style="margin-bottom: 8px;">
                        <span style="color: #7f8c8d; width: 100px; display: inline-block;"><i class="fas fa-envelope"></i> Email:</span>
                        <span style="color: #2c3e50;"><?=$customer->email;?></span>
                        </p>
                        <p style="margin-bottom: 8px;">
                        <span style="color: #7f8c8d; width: 100px; display: inline-block;"><i class="fas fa-id-card"></i> ID:</span>
                        <span style="color: #2c3e50;"><?=$customer->member_id;?></span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                  <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                    <h4 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
                    <i class="fas fa-file-invoice"></i> Invoice Details
                    </h4>
                    <p style="margin: 10px 0;">
                    <span style="color: #7f8c8d;"><i class="far fa-calendar-alt"></i> Purchase Date:</span>
                    <span style="color: #2c3e50; float: right;"><?=$sell_total->order_date; ?></span>
                    </p>
                    <p style="margin: 10px 0;">
                    <span style="color: #7f8c8d;"><i class="fas fa-receipt"></i> Invoice No:</span>
                    <span style="color: #2c3e50; float: right;"><?=$sell_total->invoice_number; ?></span>
                    </p>
                  </div>
                  </div>
                </div>

                <div class="table-responsive mt-4">
                  <table class="table table-hover table-bordered" style="background: white; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                    <thead>
                      <tr style="background: linear-gradient(45deg, #3498db, #2980b9);">
                        <th style="color: white; padding: 15px; text-align: center">#</th>
                        <th style="color: white; padding: 15px;">Product Name</th>
                        <th style="color: white; padding: 15px;">Brand Name</th>
                        <th style="color: white; padding: 15px; text-align: center">Quantity</th>
                        <th style="color: white; padding: 15px; text-align: right">Unit Price</th>
                        <th style="color: white; padding: 15px; text-align: right">Total Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $invoice_id = $sell_total->id;
                      $all_product = $obj->findWhere('invoice_details','invoice_no', $invoice_id);
                      $i = 0;
                      foreach ($all_product as $products) {
                        $i++;
                        $pid = $products->pid;
                        $p_brand = $obj->find('products','id',$pid);
                        ?>
                        <tr style="transition: all 0.3s ease;">
                          <td style="vertical-align: middle; text-align: center"><?=$i?></td>
                          <td style="vertical-align: middle;"><?=$products->product_name?></td>
                          <td style="vertical-align: middle;"><?=$p_brand->brand_name?></td>
                          <td style="vertical-align: middle; text-align: center">
                            <span class="badge badge-info" style="padding: 8px 12px;">
                              <?=$products->quantity?>
                            </span>
                          </td>
                          <td style="vertical-align: middle; text-align: right">
                          ₱<?=number_format($products->price / $products->quantity, 2)?>
                          </td>
                          <td style="vertical-align: middle; text-align: right; font-weight: bold; color: #2ecc71;">
                          ₱<?=number_format($products->price, 2)?>
                          </td>
                        </tr>
                        <?php 
                      }
                      ?>  
                    </tbody>
                  </table>
                </div>

                      <hr>
                      <div class="row">
                        <div class="col-md-8 col-lg-8">
                         <div class="view_sell_payment_info" style="background: #f8f9fa; padding: 20px; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                          <h4 class="mt-0 mb-4" style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
                            <i class="fas fa-history"></i> Payment History
                          </h4>
                          <table class="table table-hover" style="background: white; border-radius: 5px;">
                            <thead>
                              <tr style="background: linear-gradient(45deg, #3498db, #2980b9);">
                              <th style="color: white; padding: 15px;">#</th>
                              <th style="color: white; padding: 15px;">Date</th>
                              <th style="color: white; padding: 15px;">Payment Type</th>
                              <th style="color: white; padding: 15px;">Payment Note</th>
                              <th style="color: white; padding: 15px;">Amount</th>
                              </tr>
                            </thead>
                          <tbody>
                            <?php 
                            $all_payment = $obj->findWhere('sell_payment','customer_id', $customer->id);
                            $i=0;
                            foreach ($all_payment as $payment) {
                              $i++;
                              ?>
                              <tr>
                                <td style="vertical-align: middle;"><?=$i;?></td>
                                <td style="vertical-align: middle;"><?=$payment->payment_date;?></td>
                                <td style="vertical-align: middle;">
                                <span class="badge badge-info" style="padding: 8px 12px; font-size: 12px;">
                                  <?=$payment->payment_type;?>
                                </span>
                                </td>
                                <td style="vertical-align: middle;"><?=$payment->pay_description;?></td>
                                <td style="vertical-align: middle; font-weight: bold; color: #2ecc71;">
                                ₱<?=number_format($payment->payment_amount, 2);?>
                                </td>
                              </tr>
                              <?php 
                            }
                             ?>
                          </tbody>
                          </table>
                         </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                          <div class="pruchase-view-description mt-0" style="border: 2px solid #ddd; border-radius: 5px; padding: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                          <h4 class="mb-3" style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
                            <i class="fas fa-money-bill-wave"></i> Payment Summary
                          </h4>
                            <table class="table">
                              <tr>
                                <td>Sub Total</td>
                                <td>:</td>
                                <td style="color:rgb(0, 88, 183); text-align: right; font-weight: bold; padding-right: 10px">₱<?=$sell_total->sub_total;?></td>
                              </tr>
                              <tr>
                                <td>Previous Balance</td>
                                <td>:</td>
                                <td style="color:rgb(0, 88, 183); text-align: right; font-weight: bold; padding-right: 10px">₱<?=$sell_total->pre_cus_due;?></td>
                              </tr>
                              <tr>
                                <td>Net Total</td>
                                <td>:</td>
                                <td style="color:rgb(0, 88, 183); text-align: right; font-weight: bold; padding-right: 10px">₱<?=$sell_total->net_total;?></td>
                              </tr>
                              <tr>
                                <td>Paid Amount</td>
                                <td>:</td>
                                <td style="color:rgb(0, 88, 183); text-align: right; font-weight: bold; padding-right: 10px">₱<?=$sell_total->paid_amount;?></td>
                              </tr>
                              <tr>
                                <td>Remaining Balance</td>
                                <td>:</td>
                                <td style="color:rgb(0, 88, 183); text-align: right; font-weight: bold; padding-right: 10px">₱<?=$sell_total->due_amount;?></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>

                <div class="view_sell_button-area mt-4">
                  <div class="d-flex justify-content-end">
                    <a href="index.php?page=return_sell&&reurn_id=<?=$sell_total->id;?>" 
                      class="btn mr-2" 
                      style="padding: 10px 20px; border-radius: 5px; transition: all 0.3s ease; 
                      box-shadow: 0 2px 5px rgba(0,0,0,0.2); 
                      background-color: #e74c3c; 
                      border: none;
                      color: white;">
                    <i class="fas fa-reply-all mr-1"></i> Return Sale
                    </a>
                    
                    <a href="index.php?page=edit_sell&&edit_id=<?=$sell_total->id;?>" 
                      class="btn mr-2" 
                      style="padding: 10px 20px; border-radius: 5px; transition: all 0.3s ease; 
                      box-shadow: 0 2px 5px rgba(0,0,0,0.2); 
                      background-color: #2980b9; 
                      border: none;
                      color: white;">
                      <i class="fas fa-edit mr-1"></i> Edit Sale
                    </a>
                  
                    <button type="button" 
                      onclick="window.print()" 
                      class="btn" 
                      style="padding: 10px 20px; border-radius: 5px; transition: all 0.3s ease; 
                      box-shadow: 0 2px 5px rgba(0,0,0,0.2); 
                      background-color: #7f8c8d; 
                      border: none;
                      color: white;">
                    <i class="fas fa-print mr-1"></i> Print
                    </button>
                  </div>
                </div>
          <style>
          .btn:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease;
          }

          /* Return Sale button hover */
          [href*="return_sell"]:hover {
            background-color: #c0392b !important;
            box-shadow: 0 4px 8px rgba(231, 76, 60, 0.3) !important;
          }

          /* Edit Sale button hover */
          [href*="edit_sell"]:hover {
            background-color: #1a5276 !important;
            box-shadow: 0 4px 8px rgba(41, 128, 185, 0.3) !important;
          }

          /* Print button hover */
          [onclick*="print"]:hover {
            background-color: #616a6b !important;
            box-shadow: 0 4px 8px rgba(127, 140, 141, 0.3) !important;
          }
          </style>
           </div>
                  <?php  
                }
              }
          ?>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <!-- /.row -->
            </div><!--/. container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper