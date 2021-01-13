<?php
include 'config.php';
header("Content-Type: application/json; charset=UTF-8");

$itemId= $_POST['itemId'];
$qty= $_POST['qty'];
    

$sql = 
"
INSERT INTO `user` (`id`, `name`, `email`, `tp1`, `tp2`, `address`, `district`, `nearestTown`, `pass`,`trolleyId`) 
                VALUES ('','$name','$email','$tp1','$tp2','$address','$district','$nearestTown','$pass','$trolleyId')
;
";
// //echo $sql;
// if(mysqli_query($conn, $sql)){
//     parkTrolley();
//     // $myObj=new \stdClass();
//     // $myObj->status = 1;
//     // $myJSON = json_encode($myObj);
//     // echo $myJSON;
   
// } else{
//     // $myObj=new \stdClass();
//     // $myObj->status = 0;
//     // $myJSON = json_encode($myObj);
//     // echo $myJSON;
// }

mysqli_close($conn);
// header("Location: ../checkEmail"); /* Redirect browser */
// exit();
?>
