<?php
require_once '../init.php';

if (isset($_POST['supplier_id'])) {
  $supplier_id = $_POST['supplier_id'];
  $stmt = $pdo->prepare("SELECT * FROM suppliar WHERE id = ?");
  $stmt->execute([$supplier_id]);
  $supplier = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($supplier) {
    echo '<p><strong>Name:</strong> ' . $supplier['name'] . '</p>';
    echo '<p><strong>Company:</strong> ' . $supplier['company'] . '</p>';
    echo '<p><strong>Address:</strong> ' . $supplier['address'] . '</p>';
    echo '<p><strong>Contact:</strong> ' . $supplier['con_num'] . '</p>';
  } else {
    echo '<p>No details found for this supplier.</p>';
  }
}
?>