<!-- Content Wrapper. Contains page content  -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1 class="m-0 text-dark">Supplier Information</h1>
        </div>
        <div class="col-md-6 mt-4">
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-4">
          <div class="card shadow-lg border-0 rounded-lg">
            <?php 
            if (isset($_GET['id'])) {
              $edit_id = $_GET['id'];
              $data = $obj->find('suppliar', 'id', $edit_id);

              if ($data) {
            ?>
              <div class="card-header bg-gradient-primary text-white py-3">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="mb-0 font-weight-bold">
                    <i class="fas fa-user-tie mr-2"></i>Supplier Details
                  </h4>
                  <span class="badge badge-light badge-pill px-4 py-2">
                    ID: #<?=$data->suppliar_id;?>
                  </span>
                </div>
              </div>
              <div class="card-body p-4">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label class="text-muted font-weight-bold small text-uppercase">Name</label>
                    <p class="form-control-static h5 mb-0"><?=$data->name;?></p>
                  </div>
                  
                  <div class="col-md-6 mb-4">
                    <label class="text-muted font-weight-bold small text-uppercase">Company</label>
                    <p class="form-control-static h5 mb-0"><?=$data->company;?></p>
                  </div>
                  
                  <div class="col-12 mb-4">
                    <label class="text-muted font-weight-bold small text-uppercase">Address</label>
                    <p class="form-control-static h5 mb-0"><?=$data->address;?></p>
                  </div>
                  
                  <div class="col-md-6 mb-4">
                    <label class="text-muted font-weight-bold small text-uppercase">Contact Number</label>
                    <p class="form-control-static h5 mb-0"><?=$data->con_num;?></p>
                  </div>
                  
                  <div class="col-md-6 mb-4">
                    <label class="text-muted font-weight-bold small text-uppercase">Email</label>
                    <p class="form-control-static h5 mb-0"><?=$data->email;?></p>
                  </div>
                </div>
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

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-4">
          <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-gradient-info text-white py-3">
              <h4 class="mb-0 font-weight-bold">
                <i class="fas fa-file-invoice-dollar mr-2"></i>Related Expenses
              </h4>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead class="bg-light">
                    <tr>
                      <th class="py-3 px-4">Date</th>
                      <th class="py-3 px-4">Expense Name</th>
                      <th class="py-3 px-4">Amount</th>
                      <th class="py-3 px-4">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (isset($data->name)) {
                      $expenses = $obj->get_all_by_value('expense', 'supplier', $data->name);
                      if ($expenses) {
                        foreach ($expenses as $expense) {
                          echo "<tr>";
                          echo "<td class='py-3 px-4'>" . date('Y-m-d', strtotime($expense->ex_date)) . "</td>";
                          echo "<td class='py-3 px-4'>" . $expense->expense_for . "</td>";
                          echo "<td class='py-3 px-4'><span class='font-weight-bold text-primary'>$" . number_format($expense->amount, 2) . "</span></td>";
                          echo "<td class='py-3 px-4'>" . $expense->ex_description . "</td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "<tr><td colspan='3' class='text-center py-5 text-muted'><i class='fas fa-info-circle mr-2'></i>No expenses found</td></tr>";
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4 mb-4">
        <button type="button" 
          onclick="window.print()" 
          class="btn btn-lg" 
          style="padding: 12px 30px; 
          border-radius: 8px; 
          transition: all 0.3s ease;
          background: linear-gradient(135deg, #2c3e50, #3498db);
          border: none;
          color: white;
          font-weight: 600;
          letter-spacing: 0.5px;
          box-shadow: 0 4px 15px rgba(0,0,0,0.2);"
          onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 6px 20px rgba(0,0,0,0.25)'" 
          onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)'">
          <i class="fas fa-print mr-2"></i> Print Report
        </button>
      </div>
    </div>
  </section>
</div>
