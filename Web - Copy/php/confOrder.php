

<?php
session_start();
include 'Trolley.php';
$id=$_SESSION['trolleyId'];;
$address="".$_REQUEST["name"].",".$_REQUEST["address"].",".$_REQUEST["address"].",".$_REQUEST["tp"];
$contactNo=$_REQUEST["tp"];
$userId= $_SESSION['userId'];
echo $id;


include 'config.php';
    $sql = " [dbo].[compleatOrder]
    @userId = $userId,
    @address = N'$address',
    @trollyId = $id,
    @contactNo = $contactNo;";


    $params = array();

    $stmt = sqlsrv_query( $conn, $sql, $params);
    
	if( $stmt === false ) {
		 die( print_r( sqlsrv_errors(), true));
	}
	else
	{
        echo "Record add successfully";
        $row = sqlsrv_fetch_array($stmt); 
        echo "ROW INSERTED WITH ID : " . $row["id"];
        echo "<br>";
	}


// if ($conn->query($sql) === TRUE) {
//     $NewtrolleyId=getTrolley()+1;

//     parkTrolley();
//     parkTrolleyForUser($NewtrolleyId,$_SESSION["userId"]);
// } else {
  
// }
 header("Location: ../login"); /* Redirect browser */
 exit();
?>