<?php
session_start();

$userName=$_REQUEST['userName'];
$pass=$_REQUEST['pass'];

include "config.php";
$sql = "SELECT * FROM [shop] WHERE [email] = '$userName' AND [pass] = '$pass';";
echo $sql;

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
    
    header("Location: ../"); /* Redirect browser */
    exit();
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $id=$row["id"];
    $name=$row["name"];
    
    $_SESSION["shopId"] = $id;
    $_SESSION["name"] = $name;
   
   header("Location: ../home"); /* Redirect browser */
exit();
}
sqlsrv_free_stmt( $stmt);



// $result = $conn->query($sql);
// //;
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         $id=$row["id"];
//         $name=$row["name"];
        
//         $_SESSION["shopId"] = $id;
//         $_SESSION["name"] = $name;
       
//        header("Location: ../home"); /* Redirect browser */
//     exit();
     
//     }
// } 
// else {
   
//      header("Location: ../"); /* Redirect browser */
//      exit();
         
// }
// $conn->close();
// }
?>