<?php
session_start();
$id=$_REQUEST["id"];

include 'config.php';
    $sql = "UPDATE `shop` SET 
    `status` = '1'
     WHERE `shop`.`id`='$id';";

if ($conn->query($sql) === TRUE) {
   echo "done";
} else {
    echo "Error";
}
 header("Location: ../index"); /* Redirect browser */
 exit();
?>
