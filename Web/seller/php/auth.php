<?php
session_start();

$userName=$_REQUEST['userName'];
$pass=$_REQUEST['pass'];

include "config.php";
$sql = "SELECT * FROM `shop` WHERE `email` = '$userName' AND `pass` = '$pass';";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $name=$row["name"];
        
        $_SESSION["shopId"] = $id;
        $_SESSION["name"] = $name;
       
       header("Location: ../home"); /* Redirect browser */
    exit();
     
    }
} 
else {
   
     header("Location: ../"); /* Redirect browser */
     exit();
         
}
$conn->close();
// }
?>