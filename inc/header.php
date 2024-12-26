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
      
      $header_name = ucfirst($current_page);
      if ($current_page == 'member') {
          $header_name = "Customers";
      } elseif ($current_page == 'member_edit') {
          $header_name = "Customer Edit";
      } elseif ($current_page == 'suppliar') {
          $header_name = "Suppliers";
      } elseif ($current_page == 'suppliar_edit') {
          $header_name = "Supplier Edit";
      } elseif ($current_page == 'product') {
          $header_name = "Products";
      } elseif ($current_page == 'product_edit') {
          $header_name = "Product Edit";
      } elseif ($current_page == 'product_list') {
          $header_name = "Product List";
      } elseif ($current_page == 'other_product_list') {
          $header_name = "Other Product List";
      } elseif ($current_page == 'purchase') {
          $header_name = 'Purchase';
      } elseif ($current_page == 'purchase_edit') {
          $header_name = "Purchase Edit";
      } elseif ($current_page == "purchase_report") {
          $header_name = "Purchase Reports";
      } elseif ($current_page == 'invoice') {
          $header_name = "Invoice";
      } elseif ($current_page == 'invoice_edit') {
          $header_name = "Invoice Edit";
      } elseif ($current_page == 'report') {
          $header_name = "Report";
      } elseif ($current_page == 'report_edit') {
          $header_name = "Report Edit";
      } elseif ($current_page == "add_product") {
          $header_name = "Add Product";
      } elseif ($current_page == "category") {
          $header_name = "Categories";
      } elseif ($current_page == "category_edit") {
        $header_name = "Category Edit";
      } elseif ($current_page == "profile") {
        $header_name = "Profile";
      } elseif ($current_page == "error_page") {
        $header_name = "Error Page";
      } elseif ($current_page == "quick_sell") {
        $header_name = "Quick Sell";
      } elseif ($current_page == "quick_sell_edit") {
        $header_name = "Quick Sell Edit";
      } elseif ($current_page == "sell_list") {
        $header_name = "Sales List";
      } elseif ($current_page == "sell_return") {
        $header_name = "Sell Return";
      } elseif ($current_page == "sell_return_edit") {
        $header_name = "Sell Return Edit";
      } elseif ($current_page == "sell_return_report") {
        $header_name = "Sell Return Reports";
      } elseif ($current_page == "exspense_list") {
        $header_name = "Expense List Materials";
      } elseif ($current_page == "expense_edit") {
        $header_name = "Expense Edit";
      } elseif ($current_page == "expense_catagory_list") {
        $header_name = "Expense Category List";
      } elseif ($current_page == "add_stuff") {
        $header_name = "Add Staff";
      } elseif ($current_page == "staff_list") {
        $header_name = "Staff List";
      } elseif ($current_page == "sales_report") {
        $header_name = "Sales Report";
      } elseif ($current_page == "return_sell") {
        $header_name = "Return Sell"; 
      } elseif ($current_page == "sell_pay") {
        $header_name = "Sell Payments";
      }

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