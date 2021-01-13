<?php
session_start();

$id=$_REQUEST['id'];;
$action=$_REQUEST["action"];

include 'config.php';
    $sql = "UPDATE `orders` SET 
    `status` = '$action'
     WHERE `orders`.`trolleyId`='$id';";

if ($conn->query($sql) === TRUE) {
   
} else {
  
}
 header("Location: ../newOrders"); /* Redirect browser */
 exit();
?>