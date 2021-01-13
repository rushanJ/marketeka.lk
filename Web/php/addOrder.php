<?php
session_start();
if (!isset($_SESSION["userId"])) {
	header("Location: ../login"); /* Redirect browser */
    exit();
}
include 'config.php';
header("Content-Type: application/json; charset=UTF-8");
session_start();
$item= $_POST['itemId'];
$qty= $_POST['qty'];
$address= $_POST['address'];
$trolleyId= $_SESSION['trolleyId'];
$userID= $_SESSION['userId'];


$sql = 
"INSERT INTO  `orders` (`id`, `item`, `qty`,`trolleyId`, `address`, `status`, `timeStamp`,`user`)
                VALUES ('','$item','$qty','$trolleyId','','PENDING',CURRENT_TIMESTAMP,'$userID')
ON DUPLICATE KEY UPDATE
`qty`='$qty',
`timeStamp`=CURRENT_TIMESTAMP
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
header("Location: ../cart"); /* Redirect browser */
exit();
?>
