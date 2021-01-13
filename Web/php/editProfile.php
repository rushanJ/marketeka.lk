<?php
include 'config.php';
include 'Trolley.php';
header("Content-Type: application/json; charset=UTF-8");


$name= $_POST['name'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$tp1= $_POST['tp1'];
$tp2= $_POST['tp2'];
$address= $_POST['address'];
$district= $_POST['district'];
$nearestTown= $_POST['nearestTown'];
// $trolleyId=getTrolley();

    

$sql = 
"INSERT INTO `user` (`id`, `name`, `email`, `tp1`, `tp2`, `address`, `district`, `nearestTown`, `pass`) 
                VALUES ('','$name','$email','$tp1','$tp2','$address','$district','$nearestTown','$pass')
ON DUPLICATE KEY UPDATE
`name`='$name',
`email`='$email',
`tp1`='$tp1',
`tp2`='$tp2',
`address`='$address',
`district`='$district',
`nearestTown`='$nearestTown',
`pass`='$pass'
;
";
//echo $sql;
if(mysqli_query($conn, $sql)){
    // parkTrolley();
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
