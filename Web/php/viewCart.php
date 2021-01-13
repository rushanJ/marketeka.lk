<?php

    $userId= $_SESSION['userId'];
    $trolleyId=$_SESSION['trolleyId'];
   
    $sql = "SELECT `item`.`itemCode`,`orders`.`qty`,`item`.`name` As `itemName`,`item`.`id`AS `itemId`,`shop`.`name` As `shopName`,`item`.`unitPrice`,`item`.`imgType`,`item`.`measuringUnit`,`orders`.`id` FROM `shop`,`orders`,`item`WHERE `orders`.`item`=`item`.`id` AND `item`.`shop`=`shop`.`id` AND `orders`.`trolleyId`='$trolleyId'";


//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $itemName=$row["itemName"];
         $itemCode=(int)$row["itemCode"];
         $itemId=$row["itemId"];
         $shopName=$row["shopName"];
         $qty=$row["qty"];
         $imgType=$row["imgType"];
         $unitPrice=$row["unitPrice"];
         $measuringUnit=$row["measuringUnit"];
         $id=$row["id"];
      
        $ammount= sprintf("%.2f",$qty*$unitPrice);
        echo "
                
                
        <tr class=\"rem1\">
        <td class=\"invert-image\"><img src=\"../images/$itemId.$imgType\" alt=\" \" class=\"img-responsive\" style=\"height: 50px;\"></td>

        <td class=\"invert\">$itemCode</td>
        <td class=\"invert\">$shopName
        </td>
      
        <td class=\"invert\">$qty</td>
        <td class=\"invert\">$itemName
        </td>
        <td class=\"invert\">Rs. $unitPrice/$measuringUnit</td>
        <td class=\"invert\">Rs. $ammount</td>


        <td class=\"invert\">
           <a href=\"../php/removeFromCart.php?id=$id\">
            <div class=\"rem\">
                <div class=\"close1\"> </div>
            </div>
            </a>

        </td>
        </tr>
                
    "
;
     
    }
} 
else {
  "No Items Yet";
         
}

                ?>


