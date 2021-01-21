<?php

    $userId= $_SESSION['userId'];
    $trolleyId=$_SESSION['trolleyId'];
   
    $sql = "SELECT item.itemCode,order_item.qty,item.name As itemName,item.id AS itemId,shop.name As shopName,shop.id As shopId,item.unitPrice,item.imgType,item.measuringUnit,order_item.id,shop.deliveryChargeType,shop.charge FROM shop,order_item,item WHERE order_item.item=item.id AND item.shop=shop.id AND order_item.trollyId='$trolleyId'";


// echo $sql;
include "config.php";
$total=0;
$shopList=array();
$deliveryCharge=0;


$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $id=$row["id"];
    $itemName=$row["itemName"];
    $itemCode=(int)$row["itemCode"];
    $itemId=$row["itemId"];
    $shopName=$row["shopName"];
    $shopId=$row["shopId"];
    $qty=$row["qty"];
    $imgType=$row["imgType"];
    $unitPrice=$row["unitPrice"];
    $measuringUnit=$row["measuringUnit"];
    $deliveryChargeType=$row["deliveryChargeType"];
    $charge=$row["charge"];
  
    
   //  $presntage="";
       $ammount= sprintf("%.2f",$qty*$unitPrice);
   //     $total=$total+$ammount;
 
     $total=$total+$ammount;
   echo "
   <tr>
   <td>$itemName(x$qty $measuringUnit)</td>
   <td style=\"text-align:right\">Rs.$ammount </td>
 </tr>      
"
;
}

sqlsrv_free_stmt( $stmt);

//sqlsrv_close($conn);

// $result = $conn->query($sql);
// //echo $sql;
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) { 
//         $id=$row["id"];
//          $itemName=$row["itemName"];
//          $itemCode=(int)$row["itemCode"];
//          $itemId=$row["itemId"];
//          $shopName=$row["shopName"];
//          $shopId=$row["shopId"];
//          $qty=$row["qty"];
//          $imgType=$row["imgType"];
//          $unitPrice=$row["unitPrice"];
//          $measuringUnit=$row["measuringUnit"];
//          $deliveryChargeType=$row["deliveryChargeType"];
//          $charge=$row["charge"];
       
         
//         //  $presntage="";
//             $ammount= sprintf("%.2f",$qty*$unitPrice);
//         //     $total=$total+$ammount;
      
//           $total=$total+$ammount;
//         echo "
//         <tr>
//         <td>$itemName(x$qty $measuringUnit)</td>
//         <td style=\"text-align:right\">Rs.$ammount </td>
//       </tr>      
//     "
// ;
     
//     }
// } 
// else {
//   "No Items Yet";
         
// }
getDeliveryCharge();
        
echo "
<tr>
<th>Total</th>
<th style=\"text-align:right\">Rs.".sprintf("%.2f",$total)."</th>

</tr>";




function getDeliveryCharge(){
    // for ($row = 0; $row < count($shopList-1); $row++) {
    //     if ($shopList[$row][0]==$id)
    //             return false;
    // }
    // return true; 

    include "config.php";

    
    $userId= $_SESSION['userId'];
    $trolleyId=$_SESSION['trolleyId'];
   
    $sql = "SELECT sum(distinct(shop.charge)) as total FROM shop,order_item,item WHERE order_item.item=item.id AND item.shop=shop.id AND order_item.trollyId='$trolleyId'";

    $total=0;
    $shopList=array();
    $deliveryCharge=0;
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $deliveryCharge=$row["total"];
        
        echo "
        <tr>
        <td>Delevery Charge</td>
        <td style=\"text-align:right\"> Rs. ".sprintf("%.2f",$deliveryCharge)."</td>
        
        </tr>";
             
    }
    
    sqlsrv_free_stmt( $stmt);
    
    sqlsrv_close($conn); 

//echo $sql;
// include "config.php";
// $total=0;
// $shopList=array();
// $deliveryCharge=0;
// $result = $conn->query($sql);
//echo $sql;
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) { 
//         $deliveryCharge=$row["total"];
        
// echo "
// <tr>
// <td>Delevery Charge</td>
// <td style=\"text-align:right\"> Rs. ".sprintf("%.2f",$deliveryCharge)."</td>

// </tr>";
     
//     }
// } 
// else {
// }

}


                ?>


