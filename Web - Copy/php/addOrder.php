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
// $address= $_POST['address'];
$trolleyId= $_SESSION['trolleyId'];
$userID= $_SESSION['userId'];
$sql = 
"[dbo].[addToCart]
@item = $item,
@qty = $qty,
@trollyId = $trolleyId
;
";
echo $sql;

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



// if(mysqli_query($conn, $sql)){
//     $myObj=new \stdClass();
//     $myObj->status = 1;
//     $myJSON = json_encode($myObj);
//     echo $myJSON;
   
// } else{
//     $myObj=new \stdClass();
//     $myObj->status = 0;
//     $myJSON = json_encode($myObj);
//     echo $myJSON;
// }

mysqli_close($conn);
header("Location: ../cart"); /* Redirect browser */
exit();
?>
