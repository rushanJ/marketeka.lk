<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "kade";


// $servername = "153.92.6.127";
// $username = "u241276833_kade";
// $password = "rushan@@@kade";
// $dbname = "u241276833_kade";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
?>


<?php
$serverName = "DESKTOP-SHD5HM7"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"kade");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     //echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>