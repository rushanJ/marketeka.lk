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
$sql = "SELECT * FROM [user] WHERE email = '$userName' AND pass = '$pass' AND status=1; ";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
    header("Location: ../loginError"); /* Redirect browser */
    exit();
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row[0].", ".$row[1]."<br />";
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

sqlsrv_free_stmt( $stmt);



$conn->close();
// }
?>