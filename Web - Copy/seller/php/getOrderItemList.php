<?php
    // session_start();
$trolleyId=$_REQUEST["id"];
$id=$_SESSION["shopId"];
$sql = "SELECT item.itemCode,order_item.qty,item.name As itemName,item.id AS itemId,shop.name As shopName,item.unitPrice,item.imgType,item.measuringUnit,order_item.id FROM shop,order_item,item WHERE order_item.item=item.id AND item.shop=shop.id AND order_item.trollyId='$trolleyId'";
// echo $sql;
include "config.php";


$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
   
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

sqlsrv_free_stmt( $stmt);


// $result = $conn->query($sql);
// //echo $sql;
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//          $name=$row["itemName"];
//          $itemCode=$row["itemCode"];
//          $id=(int)$row["id"];
//          $unitPrice=$row["unitPrice"];
//          $measuringUnit=$row["measuringUnit"];
//          $qty=$row["qty"];
//          $unitPrice=$row["unitPrice"];
//          $unitPrice=$row["unitPrice"];
       
//          $imgType=$row["imgType"];

       
//         echo "<tr>
//         <td> <img src=\"../../images/$id.$imgType\" class=\"w3-round-xxlarge\" style=\"padding: 5px; width: 50px;\"></td>
//         <td>$itemCode</td>
//         <td>$name</td>
       
//         <td>$qty</td>
      
        

//       </tr>"
// ;
     
//     }
// } 
// else {
//   "No Items Yet";
         
// }

                ?>