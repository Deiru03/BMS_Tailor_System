<?php 
	require_once '../init.php';
	if (isset($_POST['customer_name']) && isset($_POST['orderdate'])) {
		 $invoice_number = "S".time();
		 $customer_name = $_POST['customer_name'];
		 $find_customer_name = $obj->find('member','id',$customer_name);
		 $find_customer_name = $find_customer_name->name;
		 $orderdate = $obj->convertDateMysql($_POST['orderdate']);

		// now get the array value 

		$total_quantity = $_POST['total_quantity'];
		$orderQuantity = $_POST['orderQuantity'];
		$price = $_POST['price'];
		$totalPrice = $_POST['totalPrice'];
		$pro_name = $_POST['pro_name'];
		$pid = $_POST['pid'];

		$subtotal = $_POST['subtotal'];
		$discount = $_POST['s_discount_amount'];
		$prev_due = $_POST['prev_due'];
		$netTotal = $_POST['netTotal'];
		$paidBill = $_POST['paidBill'];
		$dueBill = $_POST['dueBill'];
		$payMethode = $_POST['payMethode'];

		echo $result = $obj->storeCustomerOrderInvoice($invoice_number,$customer_name ,$orderdate,$find_customer_name,$total_quantity,$orderQuantity,$price,$totalPrice,$pro_name,$pid,$subtotal,$discount,$prev_due,$netTotal,$paidBill,$dueBill,$payMethode );
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Add debugging statements to check if the request is received
		error_log("Sell request received");
	
		// Process the request and return the response
		// Example: $result = $obj->processSell($_POST);
		// if ($result) {
		//     echo $result; // Assuming $result contains the ID of the new sell
		// } else {
		//     echo "Error processing sell";
		// }
	
		// For debugging purposes, let's just return a dummy response
		echo ""; // Replace this with actual processing logic
	} else {
		echo "Invalid request method";
	}
 ?>