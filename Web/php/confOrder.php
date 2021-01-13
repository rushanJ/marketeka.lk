

<?php
session_start();
include 'Trolley.php';
$id=$_SESSION['trolleyId'];;
$address="".$_REQUEST["name"].",".$_REQUEST["address"].",".$_REQUEST["address"].",".$_REQUEST["tp"];
$remarks=$_REQUEST["remarks"];

echo $id;

include 'config.php';
    $sql = "UPDATE `orders` SET 
    `status` = 'CONFIRMED BY CUSTOMER',
    `address` = '$address',
    `remarks` = '$remarks'
    
     WHERE `orders`.`trolleyId`='$id';";

if ($conn->query($sql) === TRUE) {
    $NewtrolleyId=getTrolley()+1;

    parkTrolley();
    parkTrolleyForUser($NewtrolleyId,$_SESSION["userId"]);
} else {
  
}
 header("Location: ../index"); /* Redirect browser */
 exit();
?>