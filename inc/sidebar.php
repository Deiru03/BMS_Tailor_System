<style>
  .main-sidebar {
    background-color:rgb(255, 255, 255);
    color: #fff;
  }

  .main-sidebar .brand-logo img {
    border-radius: 50%;
  }

  .main-sidebar .nav-link {
    color:rgb(73, 87, 102);
  }

  .main-sidebar .nav-link.active {
    background-color: #495057;
    color: #fff;
  }

  .main-sidebar .nav-link:hover {
    background-color:rgb(185, 220, 255);
    color: #fff;
  }

  .main-sidebar .nav-icon {
    margin-right: 10px;
  }

  .main-sidebar .nav-treeview .nav-link {
    padding-left: 30px;
  }
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar">

  <!-- Brand Logo -->
  <div class="brand-logo text-center my-3">
    <img src="dist/img/log.jpg" alt="logo" style="width: 200px; height: auto;">
  </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="index.php?page=dashboard" class="nav-link <?php echo $actual_link == 'dashboard' ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- Customers -->
        <li class="nav-item">
          <a href="index.php?page=member" class="nav-link <?php echo $actual_link == 'member' ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">supervisor_account</i>
            <p>Customer</p>
          </a>
        </li>
        <!-- Suppliers -->
        <li class="nav-item">
          <a href="index.php?page=suppliar" class="nav-link <?php echo $actual_link == 'suppliar' ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">group</i>
            <p>Supplier</p>
          </a>
        </li>
        <!-- Categories -->
        <li class="nav-item">
          <a href="index.php?page=category" class="nav-link <?php echo $actual_link == 'category' ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">difference</i>
            <p>Category</p>
          </a>
        </li>
        <!-- Stock -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link <?php echo ($actual_link == 'add_product' || $actual_link == 'product_list') ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">inventory</i>
            <p>
              Stock
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page=add_product" class="nav-link <?php echo $actual_link == 'add_product' ? 'active' : ''; ?>">
                <p>Add Product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=product_list" class="nav-link <?php echo $actual_link == 'product_list' ? 'active' : ''; ?>">
                <p>Products List</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Sales -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link <?php echo ($actual_link == 'quick_sell' || $actual_link == 'sell_list' || $actual_link == 'sell_return_list') ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">sell</i>
            <p>
              Sales
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page=quick_sell" class="nav-link <?php echo $actual_link == 'quick_sell' ? 'active' : ''; ?>">
                <p>New Sales</p>
              </a>
            </li>
            <li class="nav-item">
              <?php $isActive = in_array($actual_link, ['sell_list', 'sell_return_list', 'view_sell']); ?>
              <a href="index.php?page=sell_list" class="nav-link <?php echo $isActive ? 'active' : ''; ?>">
                <p>Sales Records</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Materials -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link <?php echo ($actual_link == 'add_expense' || $actual_link == 'exspense_list' || $actual_link == 'expense_catagory_list') ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">money</i>
            <p>
              Materials
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page=exspense_list" class="nav-link <?php echo $actual_link == 'exspense_list' ? 'active' : ''; ?>">
                <p>Expenses Materials List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=expense_catagory_list" class="nav-link <?php echo $actual_link == 'expense_catagory_list' ? 'active' : ''; ?>">
                <p>Materials Category List</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Staff -->
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link <?php echo ($actual_link == 'buy_product' || $actual_link == 'buy_list' || $actual_link == 'buy_refund_list') ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">diversity_3</i>
            <p>
              Staff
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page=add_stuff" class="nav-link <?php echo $actual_link == 'add_stuff' ? 'active' : ''; ?>">
                <p>Add Staff</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=staff_list" class="nav-link <?php echo $actual_link == 'staff_list' ? 'active' : ''; ?>">
                <p>Staff List</p>
              </a>
            </li>
          </ul>
        </li> -->
        <!-- Reports -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link <?php echo ($actual_link == 'profit_loss' || $actual_link == 'sales_report' || $actual_link == 'purchase_report' || $actual_link == 'purchase_pay_report' || $actual_link == 'sell_pay_report') ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">lab_profile</i>
            <p>
              Reports
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page=sales_report" class="nav-link <?php echo $actual_link == 'sales_report' ? 'active' : ''; ?>">
                <p>Sales Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=purchase_report" class="nav-link <?php echo $actual_link == 'purchase_report' ? 'active' : ''; ?>">
                <p>Expenses Report</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Backup Database -->
        <li class="nav-item">
          <a href="index.php?page=backup_database" class="nav-link <?php echo $actual_link == 'backup_database' ? 'active' : ''; ?>">
            <i class="material-symbols-outlined">backup</i>
            <p>Backup Database</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Modals -->
<?php require_once 'inc/member_add_modal.php'; ?>
<?php require_once 'inc/catagory_modal.php'; ?>
<?php require_once 'inc/suppliar_modal.php'; ?>
<?php require_once 'inc/expense_catagory_modal.php'; ?>