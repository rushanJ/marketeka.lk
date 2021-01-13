<?php
    // session_start();
$trolleyId=$_REQUEST["id"];
$id=$_SESSION["shopId"];
$sql = "SELECT `item`.`itemCode`,`orders`.`qty`,`item`.`name` As `itemName`,`item`.`id`AS `itemId`,`shop`.`name` As `shopName`,`item`.`unitPrice`,`item`.`imgType`,`item`.`measuringUnit`,`orders`.`id` FROM `shop`,`orders`,`item`WHERE `orders`.`item`=`item`.`id` AND `item`.`shop`=`shop`.`id` AND `orders`.`trolleyId`='$trolleyId'";

//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $name=$row["itemName"];
         $itemCode=$row["itemCode"];
         $id=(int)$row["id"];
         $unitPrice=$row["unitPrice"];
         $measuringUnit=$row["measuringUnit"];
         $qty=$row["qty"];
         $unitPrice=$row["unitPrice"];
         $unitPrice=$row["unitPrice"];
       
         $imgType=$row["imgType"];

       
        echo "<tr>
        <td> <img src=\"../../images/$id.$imgType\" class=\"w3-round-xxlarge\" style=\"padding: 5px; width: 50px;\"></td>
        <td>$itemCode</td>
        <td>$name</td>
       
        <td>$qty</td>
      
        

      </tr>"
;
     
    }
} 
else {
  "No Items Yet";
         
}

                ?>