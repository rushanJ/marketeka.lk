<?php

function getTrolley() {
    include 'config.php';
$sql = "SELECT * FROM info";
$result = $conn->query($sql);
//echo $sql;

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $trolleyId=$row["trolleyId"];
       return $trolleyId ;
}

sqlsrv_free_stmt( $stmt);

// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         $trolleyId=$row["trolleyId"];
//         return $trolleyId ;
//     }
// } 
// else {          
// }
}

function parkTrolley() {
    include 'config.php';
    $sql = "UPDATE info SET trolleyId=trolleyId+1 ";

if ($conn->query($sql) === TRUE) {
  
} else {
  
}


}


function parkTrolleyForUser($trolleyId,$userID) {
    include 'config.php';
    $sql = "UPDATE `user` SET `trolleyId` = '$trolleyId' WHERE `user`.`id` = '$userID'; ";

if ($conn->query($sql) === TRUE) {
  
} else {
  
}


}

?>


