<?php
  //  session_start();
$id=$_SESSION["shopId"];
    $sql = "SELECT distinct(`orders`.`trolleyId`) FROM `orders`,`item`,`shop` WHERE `orders`.`item`=`item`.`id` AND `item`.`shop`=`shop`.`id` AND `orders`.`status`= 'CONFIRMED BY CUSTOMER'";

//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $trolleyId=$row["trolleyId"];
         $sql1 = "SELECT `item`.`name` , `orders`.`trolleyId`,sum(`item`.`unitPrice`*`orders`.`qty`) as `tot`, `orders`.`address`, `orders`.`timeStamp`, `orders`.`status`,  `orders`.`remarks`, count(`orders`.`item`) as `noOfItems` FROM `orders`,`item`,`shop` WHERE `orders`.`item`=`item`.`id` AND `item`.`shop`=`shop`.`id` AND `orders`.`trolleyId`=$trolleyId";
         $result1 = $conn->query($sql1);
         //echo $sql;
         if ($result1->num_rows > 0) {
             while($row1 = $result1->fetch_assoc()) { 
             $trolleyId=$row1["trolleyId"];
             $tot=$row1["tot"];
             $address=$row1["address"];

         $noOfItems=$row1["noOfItems"];
         $status=$row1["status"];
         $timeStamp=$row1["timeStamp"];
         $remarks=$row1["remarks"];

       
         echo "<tr>
      
         <td>$trolleyId</td>
        <td>$tot</td>
        <td>$address</td>
         <td>$noOfItems</td>
         <td>$status</td>
         <td>$remarks</td>
         <td>
         <a href =\"../viewOrder?id=$trolleyId\">   <div class=\"w3-left\"><i class=\"fa fa-eye w3-xlarge\"></i></div></a>
        </td>

     </tr>"
 ;
            }
        } 
        else {
          "No Items Yet";
                 
        }
        

     
    }
} 
else {
  "No Items Yet";
         
}

                ?>