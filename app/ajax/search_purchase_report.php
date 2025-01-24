<?php 
require_once '../init.php';
	if (isset($_POST) && !empty($_POST)) {
		 $issueData = $_POST['issuedate'];
		 $customer = $_POST['customer'];


		$data = explode('-', $issueData);
	  $issu_first_date = $obj->convertDateMysql($data[0]);
		$issu_end_date = $obj->convertDateMysql($data[1]);

      if ($customer == 'all') {
    $stmt = $pdo->prepare("SELECT * FROM `expense` WHERE `ex_date` BETWEEN '$issu_first_date' AND '$issu_end_date'");
    $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_OBJ);
      if ($res) {
        ?>
          <?php 
          $i=0;
              foreach ($res as $data) {
                $i++;
                ?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$data->id;?></td>
                    <td><?=$data->expense_for;?></td>
                    <td><?=$data->ex_description;?></td>
                    <td><?=$data->amount;?></td>
                    <td><?=$data->supplier;?></td>
                    <td><?=$data->ex_date;?></td>
                  </tr>
                <?php 
              }
           ?>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>Total : </th>
          <th> 
            <?php  
                $stmt = $pdo->prepare("SELECT SUM(`amount`) FROM `expense` WHERE `ex_date` BETWEEN '$issu_first_date' AND '$issu_end_date' ");
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_NUM);
                echo $res[0];
            ?>   
            </th>
        </tr>
        <?php 
      }else{
         echo "no data found"; 
      }
  }else{
    $stmt = $pdo->prepare("SELECT * FROM `expense` WHERE `ex_date` BETWEEN '$issu_first_date' AND '$issu_end_date' AND `supplier` = '$customer'");
    $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_OBJ);
       if ($res) {
        ?>
          <?php 
          $i=0;
               foreach ($res as $data) {
                $i++;
                ?>
                  <tr>
                    <td><?=$i;?></td>
                    <td><?=$data->id;?></td>
                    <td><?=$data->expense_for;?></td>
                    <td><?=$data->ex_description;?></td>
                    <td><?=$data->amount;?></td>
                    <td><?=$data->supplier;?></td>
                    <td><?=$data->ex_date;?></td>
                  </tr>
                <?php 
              }
           ?>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th> 
          <th></th>
          <th>Total : </th>
          <th>
             <?php  
                $stmt = $pdo->prepare("SELECT SUM(`amount`) FROM `expense` WHERE `ex_date` BETWEEN '$issu_first_date' AND '$issu_end_date' AND `supplier` = '$customer'");
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_NUM);
                echo $res[0];
            ?>
          </th>
        </tr>
        <?php 
      }else{
         echo "<p class='pt-1' style='text-align:center;'>"."no data found"."</p>"; 
      }
  }


	   


	}
 ?>