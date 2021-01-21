    <?php
  //  session_start();
$id=$_SESSION["shopId"];
    $sql = "SELECT * FROM item WHERE item.shop= $id AND item.itemLock= 0  ORDER BY item.id";

//echo $sql;
include "config.php";



$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
  $name=$row["name"];
  $itemCode=$row["itemCode"];
  $id=(int)$row["id"];
  $unitPrice=$row["unitPrice"];
  $measuringUnit=$row["measuringUnit"];
  $qty=$row["qty"];
  $unitPrice=$row["unitPrice"];
  $minPrice=$row["minPrice"];
  $purchasePrice=$row["purchasePrice"];
  $description=$row["description"];
  $imgType=$row["imgType"];


 echo "<tr>
 <td> <img src=\"../../images/$id.$imgType\" class=\"w3-round-xxlarge\" style=\"padding: 5px; width: 50px;\"></td>
 <td>$itemCode</td>
 <td>$name</td>
 <td>$description</td>
 <td>$qty</td>
 <td>$unitPrice/$measuringUnit</td>
 <td>$minPrice/$measuringUnit</td>
 <td>$purchasePrice/$measuringUnit</td>
 <td>
 <a href =\"../editItem?id=$id\">
 <i class=\"fa fa-edit \"> </i></a>
 <a href =\"../php/removeItem.php?id=$id\"> <i class=\"fa fa-trash \"></i></a>
 </td>

</tr>"
;
}

sqlsrv_free_stmt( $stmt);



                ?>