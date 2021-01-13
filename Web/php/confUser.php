<?php
session_start();
$id=$_REQUEST["id"];

include 'config.php';
    $sql = "UPDATE `user` SET 
    `status` = '1'
     WHERE `user`.`id`='$id';";

if ($conn->query($sql) === TRUE) {
   
} else {
  
}
 header("Location: ../index"); /* Redirect browser */
 exit();
?>
