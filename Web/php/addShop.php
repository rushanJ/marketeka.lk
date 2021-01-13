<?php
include 'config.php';
header("Content-Type: application/json; charset=UTF-8");

$name= $_POST['name'];
$contactNo= $_POST['address'];
$district= $_POST['district'];
$nearestTown= $_POST['nearestTown'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$ownerName= $_POST['ownerName'];
$ownerAddress= $_POST['ownerAddress'];
$ownerAddress= $_POST['ownerAddress'];
$NIC= $_POST['NIC'];
$br_no= $_POST['br_no'];
$deliveryChargeType=$_POST['deliveryChargeType'];
$ownerEmail= $_POST['ownerEmail'];   
$charge =$_POST["charge"];

$sql = 
"INSERT INTO `shop`(`id`, `name`, `contactNo`, `address`, `district`, `nearestTown`,`deliveryChargeType`,`charge`, `email`, `pass`, `ownerName`, `ownerAddress`, `NIC`, `br_no`, `ownerEmail`, `status`)
                VALUES ('','$name','$contactNo','$address','$district','$nearestTown','$deliveryChargeType','$charge','$email','$pass','$ownerName','$ownerAddress','$NIC','$br_no','$ownerEmail','1')
ON DUPLICATE KEY UPDATE
`contactNo`='$contactNo',
`ownerName`='$ownerName',
`pass`='$pass',
`ownerAddress`='$ownerAddress',
`NIC`='$NIC',
`br_no`='$br_no',
`deliveryChargeType`=$deliveryChargeType,
`charge`=$charge,

`ownerEmail`='$ownerEmail'
;
";
//echo $sql;
if(mysqli_query($conn, $sql)){
    $myObj=new \stdClass();
    $myObj->status = 1;
    $myJSON = json_encode($myObj);
    echo $myJSON;
   
} else{
    $myObj=new \stdClass();
    $myObj->status = 0;
    $myJSON = json_encode($myObj);
    echo $myJSON;
}

mysqli_close($conn);
// header("Location: ../checkEmail"); /* Redirect browser */
// exit();
?>
