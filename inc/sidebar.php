
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar ">

    <!-- Brand Logo -->

      <img src="dist/img/log.jpg" alt="logo" class="brand-image ">
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php 
               $login_user = $_SESSION['user_id'];
               $login_user = $obj->find('user','id',$login_user);
               echo $login_user->username;
             ?>
          </a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link <?php echo $actual_link=='dashboard'?'active':'';?>">
              <i class="material-symbols-outlined">dashboard</i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="index.php?page=member" class="nav-link <?php echo $actual_link=='member'?'active':'';?>">
              <i class="material-symbols-outlined">supervisor_account</i>
              <p>
                Customer
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="index.php?page=suppliar" class="nav-link <?php echo $actual_link=='suppliar'?'active':'';?>">
              <i class="material-symbols-outlined">group</i>
              <p>
                Supplier
              </p>
            </a>
          </li>
          <li class="nav-item">
        <a href="index.php?page=category" class="nav-link <?php echo $actual_link=='category'?'active':'';?>">
              <i class="material-symbols-outlined">difference</i><p>
                 Category
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php 
              if ($actual_link == 'add_product' || $actual_link =='product_list') {echo "active";
          }else{
            echo "";
          }
            ?>">
              <i class="material-symbols-outlined">inventory</i><p>
                Stock
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=add_product" class="nav-link <?php echo $actual_link=='add_product'?'active':'';?>">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Add product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=product_list" class="nav-link <?php echo $actual_link=='product_list'?'active':'';?>">
                  <!-- <i class="fas fa-align-justify nav-icon"></i> -->
                  <p>Products list</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php 
              if ($actual_link == 'quick_sell' || $actual_link =='sell_list' || $actual_link =='sell_return_list') {echo "active";
          }else{
            echo "";
          }
            ?>">
              <i class="material-symbols-outlined">sell</i>
              <p>
                Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=quick_sell" class="nav-link <?php echo $actual_link=='quick_sell'?'active':'';?>">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>New sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=sell_list" class="nav-link <?php echo $actual_link=='sell_list'?'active':'';?>">
                  <!-- <i class="fas fa-align-justify nav-icon"></i> -->
                  <p>Sales list</p>
                </a>
              </li>
              <li class="nav-item">
               
              </li>
            </ul>
          </li>

          <!-- expense sidebar menu -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php 
              if ($actual_link == 'add_expense' || $actual_link =='exspense_list' || $actual_link == 'expense_catagory_list') {echo "active";
          }else{
            echo "";
          }
            ?>">
              <i class="material-symbols-outlined">money</i>
              <p>
                Materials
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="index.php?page=exspense_list" class="nav-link <?php echo $actual_link=='exspense_list'?'active':'';?>">
                  <!-- <i class="fas fa-align-justify nav-icon"></i> -->
                  <p>Expenses materials list</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="index.php?page=expense_catagory_list" class="nav-link <?php echo $actual_link=='expense_catagory_list'?'active':'';?>">
                  <!-- <i class="fas fa-align-justify nav-icon"></i> -->
                  <p>Materials category list</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- buy sidebar  -->
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php 
              if ($actual_link == 'buy_product' || $actual_link =='buy_list' || $actual_link == 'buy_refund_list') {echo "active";
          }else{
            echo "";
          }
            ?>">
              
        
               <i  class="material-symbols-outlined">diversity_3</i>
              <p>
                Staff
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=add_stuff" class="nav-link <?php echo $actual_link=='add_stuff'?'active':'';?>">
                 
                  <p>Add Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=staff_list" class="nav-link <?php echo $actual_link=='staff_list'?'active':'';?>">
                 
                  <p>Staff list</p>
                </a>
              </li>
            </ul>
          </li>
        
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php 
              if ($actual_link == 'profit_loss' || $actual_link =='sales_report' || $actual_link =='purchase_report' || $actual_link =='purchase_pay_report' || $actual_link =='sell_pay_report') {echo "active";
          }else{
            echo "";
          }
            ?>">
               <i class="material-symbols-outlined">lab_profile</i>
              <p>
               Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="index.php?page=sales_report" class="nav-link <?php echo $actual_link=='sales_report'?'active':'';?>">
                 
                  <p>Sales report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=purchase_report" class="nav-link <?php echo $actual_link=='purchase_report'?'active':'';?>">
                  
                  <p>Purchase report</p>
                </a>
              </li>
              <
             
            </ul>
          </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php 
              if ($actual_link == 'backup_database') {echo "active";
          }else{
            echo "";
          }
            ?>">
              
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    </div>
    <?php require_once 'inc/member_add_modal.php'; ?>
    <?php require_once 'inc/catagory_modal.php'; ?>
    <?php require_once 'inc/suppliar_modal.php'; ?>
    <?php require_once 'inc/expense_catagory_modal.php'; ?>