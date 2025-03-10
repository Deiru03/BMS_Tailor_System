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
   $searchQuery = " AND (id LIKE :id or 
        ex_date LIKE :ex_date OR 
        amount LIKE :amount OR 
        expense_for LIKE :expense_for OR
        supplier LIKE :supplier) ";
   $searchArray = array( 
        'id'=>"%$searchValue%", 
        'ex_date'=>"%$searchValue%",
        'amount'=>"%$searchValue%",
        'expense_for'=>"%$searchValue%"
   );
}

## Total number of records without filtering
$stmt = $pdo->prepare("SELECT COUNT(*) AS allcount FROM expense ");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $pdo->prepare("SELECT COUNT(*) AS allcount FROM expense WHERE 1 ".$searchQuery);
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $pdo->prepare("SELECT * FROM expense WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT :limit,:offset");

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
   // Get the category name for this expense
   $catStmt = $pdo->prepare("SELECT name FROM expense_catagory WHERE id = :cat_id");
   $catStmt->bindValue(':cat_id', $row['expense_cat'], PDO::PARAM_INT);
   $catStmt->execute();
   $catResult = $catStmt->fetch(PDO::FETCH_ASSOC);
   $categoryName = ($catResult) ? $catResult['name'] : 'Unknown'; // Use 'Unknown' if no category found
   
   $data[] = array(
      "id"=>$row['id'],
      "ex_date"=>$row['ex_date'],
      "expense_for"=>$row['expense_for'],
      "the_supplier"=>$row['supplier'],
      "amount"=>$row['amount'],
      "expense_cat"=>$categoryName, // Display category name instead of ID
      "ex_description"=>$row['ex_description'],
      "action"=>'
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="index.php?page=expense_edit&&edit_id='.$row['id'].'" class="btn btn-secondary btn-sm rounded-0" id="expenseEdit_btn"><i class="fas fa-edit"></i></a>
            <button type="button" id="expenseDelete_btn" class="btn btn-danger btn-sm rounded-0 ml-2" data-id="'.$row['id'].'"><i class="fas fa-trash-alt"></i></button>
          </div>
      ',
   );
}

## Response
$response = array(
   "draw" => intval($draw),
   "iTotalRecords" => $totalRecords,
   "iTotalDisplayRecords" => $totalRecordwithFilter,
   "aaData" => $data
);

echo json_encode($response);
?>