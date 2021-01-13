<?php
$id=$_REQUEST["id"];
include 'config.php';
    $sql = "DELETE FROM `orders` WHERE `orders`.`id` = $id";

if ($conn->query($sql) === TRUE) {
  
} else {
  
}
header("Location: ../cart"); /* Redirect browser */
exit();
?>