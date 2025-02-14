<?php
require_once '../init.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

$searchArray = array();

## Search 
$searchQuery = " ";
if($searchValue != ''){
   $searchQuery = " AND (member_id LIKE :member_id or 
        name LIKE :name OR 
        con_num LIKE :con_num ) ";
   $searchArray = array( 
        'member_id'=>"%$searchValue%", 
        'name'=>"%$searchValue%",
        'con_num'=>"%$searchValue%"
   );
}

## Total number of records without filtering
$stmt = $pdo->prepare("SELECT COUNT(*) AS allcount FROM member ");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $pdo->prepare("SELECT COUNT(*) AS allcount FROM member WHERE 1 ".$searchQuery);
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $pdo->prepare("SELECT * FROM member WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT :limit,:offset");

// Bind values
foreach($searchArray as $key=>$search){
   $stmt->bindValue(':'.$key, $search,PDO::PARAM_STR);
}

$stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
$stmt->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
$stmt->execute();
$empRecords = $stmt->fetchAll();

$data = array();

foreach($empRecords as $row){
   $data[] = array(
      "member_id"=>$row['member_id'],
      "name"=>$row['name'],
      "company"=>$row['company'],
      "address"=>$row['address'],
      "con_num"=>$row['con_num'],
      "total_buy"=>$row['total_buy'],
      "total_paid"=>$row['total_paid'],
      "total_due"=>($row['total_due'] < 0 ? 
          '<span style="color: green;">Change: '.number_format(abs($row['total_due']), 2).'</span>' : 
          '<span style="color: red;">Balance: '.number_format($row['total_due'], 2).'</span>'),
      "action"=>'
          <div class="btn-group" >
         
          <a href="index.php?page=member_edit&&edit_id='.$row['id'].'" class="btn btn-secondary btn-sm rounded-0" id="memberEdit_btn" type="button"><i class="fas fa-edit"></i></a>


             <p id="memberDelete_btn"class="btn btn-danger btn-sm rounded-0 " data-id="'.$row['id'].'" > <i class="fas fa-trash-alt"></i></p>
          </div>
      
      ',
   );
}
// <a href="index.php?page=sell_pay&&id='.$row['id'].'"  class="btn btn-info btn-sm rounded-0" type="button"><i class="fa fa-credit-card"></i></a>


## Response
$response = array(
   "draw" => intval($draw),
   "iTotalRecords" => $totalRecords,
   "iTotalDisplayRecords" => $totalRecordwithFilter,
   "aaData" => $data
);

echo json_encode($response);