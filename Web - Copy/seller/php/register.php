<?php
include 'config.php';

header("Content-Type: application/json; charset=UTF-8");


$shopName= $_POST['shopName'];
$contactNo= $_POST['contactNo'];
$address= $_POST['address'];
$district= $_POST['district'];
$nearestTown= $_POST['nearestTown'];
$charge= $_POST['charge'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$ownerName= $_POST['ownerName'];
$ownerAddress= $_POST['ownerAddress'];
$NIC= $_POST['NIC'];
$br_no= $_POST['br_no'];
$ownerEmail= $_POST['ownerEmail'];
    echo $pass;

// $sql = 
// "INSERT INTO `shop`(`id`, `name`, `contactNo`, `address`, `district`, `nearestTown`, `deliveryChargeType`, `charge`, `email`, `pass`, `ownerName`, `ownerAddress`, `NIC`, `br_no`, `ownerEmail`, `status`) 
//             VALUES ('', '$shopName', '$contactNo', '$address', '$district', '$nearestTown', 'FIXED', '$charge', '$email', '$pass', '$ownerName', '$ownerAddress', '$NIC', '$br_no', '$sqlownerEmail', 1)
 
// ;
// ";
$sql="CALL `addShop`('$shopName', '$contactNo', '$address', '$district', '$nearestTown', 'FIXED','$charge', '$email', '$pass', '$ownerName', '$ownerAddress','$NIC', '$br_no', '$ownerEmail');";

//echo $sql;
if(mysqli_query($conn, $sql)){
    $id = $conn->insert_id;
   include "sendMail.php";
    // $myObj=new \stdClass();
    // $myObj->status = 1;
    // $myJSON = json_encode($myObj);
    // echo $myJSON;
   
} else{
    // $myObj=new \stdClass();
    // $myObj->status = 0;
    // $myJSON = json_encode($myObj);
    // echo $myJSON;
}

mysqli_close($conn);
header("Location: ../checkEmail"); /* Redirect browser */
exit();
?>
