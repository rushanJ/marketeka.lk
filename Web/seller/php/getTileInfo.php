<?php
    // session_start();
$id=$_SESSION["shopId"];

 $sql = "SELECT count(`itemCode`) as `count` FROM `item` WHERE `item`.`shop`= $id";

//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $itemCount=$row["count"];     
    }
} 
else {
    $itemCount=0;   
         
}

$sql = "SELECT count(`trolleyId`) as `count` FROM `item`,`order` WHERE `order`.`item`= `item`.`id` AND `item`.`shop`=$id AND `order`.`item`='CONFIRMED BY CUSTOMER'" ;

//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $orderCount=$row["count"];     
    }
} 
else {
    $orderCount=0;       
}

$sql = "SELECT count(`trolleyId`) as `count` FROM `item`,`order` WHERE `order`.`item`= `item`.`id` AND `item`.`shop`=$id AND `order`.`item`='CONFIRMED'" ;

//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $shippedOrderCount=$row["count"];     
    }
} 
else {
    $shippedOrderCount=0;       
}



                ?>