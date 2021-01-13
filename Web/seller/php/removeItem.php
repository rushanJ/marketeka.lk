<?php
session_start();

$id=$_REQUEST['id'];;


include 'config.php';
    $sql = "UPDATE `item` SET 
    `itemLock` = '3'
    
     WHERE `item`.`id`='$id';";

if ($conn->query($sql) === TRUE) {
  
} else {
  
}
 header("Location: ../item"); /* Redirect browser */
 exit();
?>