<?php
include '../config.php';
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $item= $_POST['item'];
    $size= $_POST['size'];
 	$user= $_SESSION["userId"];
    $qty= $_POST['qty'];

$sql = 
"INSERT INTO `checkout`(`id`, `user`, `item`,`size`, `qty`, `timeStamp`, `status`) 
            VALUES ('','$user','$item','$size','$qty','','PENDING')
";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
//header("Location:../admin/student.html"); 
//exit;


function convertMmasurement($val,$measurement) {
    if ($measurement=='cm') return $val;
    elseif ($measurement=='inch') return $val*2.5;
    else if ($measurement=='ft') return $val*30;
    else return 0;
}


?>
