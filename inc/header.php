<?php
require_once 'app/init.php';
if ($Ouser->is_login() == false) {
  header("location:login.php");
}
$actual_link = explode('=', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
  $actual_link = end($actual_link);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BMS Inventory System</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
  <!-- DataTables -->
  <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <!-- datepi cker css  -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <!-- select 2 css  -->
  <link rel="stylesheet" type="text/css" href="plugins/select2/css/select2.min.css"/>
  <!-- custom css  -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Google Font: Source Sans Pro -->
<!-- date picker -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .select2-container .select2-selection--single {
    height: 37px;
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">
  <!-- Page Preloder -->
    <div id="page"></div>
    <div id="loading"></div>
    
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <?php
      $current_page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

      $page_headers = [
          'member' => 'Customers',
          'member_edit' => 'Customer Edit',
          'suppliar' => 'Suppliers',
          'suppliar_edit' => 'Supplier Edit',
          'product' => 'Products',
          'product_edit' => 'Product Edit',
          'product_list' => 'Product List',
          'other_product_list' => 'Other Product List',
          'purchase' => 'Purchase',
          'purchase_edit' => 'Purchase Edit',
          'purchase_report' => 'Purchase Reports',
          'invoice' => 'Invoice',
          'invoice_edit' => 'Invoice Edit',
          'report' => 'Report',
          'report_edit' => 'Report Edit',
          'add_product' => 'Add Product',
          'category' => 'Categories',
          'category_edit' => 'Category Edit',
          'profile' => 'Profile',
          'error_page' => 'Error Page',
          'quick_sell' => 'New Sales / Quick Sell',
          'quick_sell_edit' => 'Quick Sell Edit',
          'sell_list' => 'Sales Transaction Records',
          'sell_return' => 'Sell Return',
          'sell_return_edit' => 'Sell Return Edit',
          'sell_return_report' => 'Sell Return Reports',
          'exspense_list' => 'Expense List Materials',
          'expense_edit' => 'Expense Edit',
          'expense_catagory_list' => 'Expense Category List',
          'add_stuff' => 'Add Staff',
          'staff_list' => 'Staff List',
          'sales_report' => 'Sales Report',
          'return_sell' => 'Return Sell',
          'sell_pay' => 'Sell Payments',
          'view_sell' => 'View Sales Information'
      ];

      $header_name = isset($page_headers[$current_page]) ? $page_headers[$current_page] : ucfirst($current_page);
    ?>
    <h3 class="mt-2 px-4 w-50" style="color:rgb(75, 90, 110);">
      <?php echo $header_name; ?>
    </h3>
  <marquee behavior="scroll" direction="left" scrollamount="4"><p style="color: red;"></marquee>
 <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <div id="google_translate_element"></div>
      <div class="notice">
                 <li>
                    
      </div>
                    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
          <img src="https://img.freepik.com/premium-vector/woman-avatar-profile-round-icon_24640-14042.jpg">
           
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="index.php?page=profile" class="dropdown-item p-1">
            <i class="material-symbols-outlined">person</i> Profile
          </a>

          <a href="index.php?page=profile" class="dropdown-item p-1">
            <i class="material-symbols-outlined">
            stacked_inbox</i>Inbox
          </a>

          <a href="app/action/logout.php" class="dropdown-item pic p-1">
            <i class="material-symbols-outlined" >logout</i> Logout
          </a>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->