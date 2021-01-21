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
$trolleyId=getTrolley();

    

$sql = 
"INSERT INTO `user` (`id`, `name`, `email`, `tp1`, `tp2`, `address`, `district`, `nearestTown`, `pass`,`trolleyId`) 
                VALUES ('','$name','$email','$tp1','$tp2','$address','$district','$nearestTown','$pass','$trolleyId')
;
";
//echo $sql;
if(mysqli_query($conn, $sql)){
    parkTrolley();
    $id = $conn->insert_id;
    include "sendMail.php";
   
   
} else{
    
    // $myObj=new \stdClass();
    // $myObj->status = 0;
    // $myJSON = json_encode($myObj);
    // echo $myJSON;
}


$params = array();

	$stmt = sqlsrv_query( $conn, $sql, $params);
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{

		echo "Record add successfully";
	}

mysqli_close($conn);
header("Location: ../checkEmail"); /* Redirect browser */
exit();
?>
