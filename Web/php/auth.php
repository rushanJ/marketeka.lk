<?php
session_start();
// header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Methods:  POST, GET');
// header("Content-Type: application/json");

$userName=$_REQUEST['userName'];
$pass=$_REQUEST['pass'];

// if ($userName=="admin"&& $pass=="nimda"){
//     $myObj=new \stdClass();
//     $myObj->success = true;
//     $myObj->user = "ADMIN";
//     $myObj->role = "ADMIN";
//     $myObj->id = 0;
//     $myJSON = json_encode($myObj);
//     echo $myJSON;
// }
// else {
include "config.php";
$sql = "SELECT * FROM `user` WHERE `email` = '$userName' AND `pass` = '$pass' AND `status`=1; ";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $name=$row["name"];
        $tp=$row["tp1"];
        $nearestTown=$row["nearestTown"];
        $trolleyId=$row["trolleyId"];
        $address=$row["address"];

        $_SESSION["userId"] = $id;
        $_SESSION["name"] = $name;
        $_SESSION["nearestTown"] = $nearestTown;
       $_SESSION["tp"] = $tp;
       $_SESSION["userAddress"] = $address;
        $_SESSION["trolleyId"] = $trolleyId;
    
        header("Location: ../index"); /* Redirect browser */
exit();
     
    }
} 
else {
    // $myObj=new \stdClass();
    // $myObj->success = false;
    // $myObj->user = 0;
    // $myObj->role =0;
    // $myObj->id = -1;

    // $myJSON = json_encode($myObj);
    // echo $myJSON;
    header("Location: ../loginError"); /* Redirect browser */
    exit();
         
}
$conn->close();
// }
?>