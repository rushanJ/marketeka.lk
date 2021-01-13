<?php
// include 'config.php';
// // header("Content-Type: application/json; charset=UTF-8");

//  $numberOfSampleData=200;
//  $totalSuccess=0;
//  $districts = array("Colombo", "Gampaha", "Kalutara", "Kandy", "Kurunegala","Kegalle", "Rathnapura", "Anuradhapura", "Galle", "Mathara","Badulla", "Mathale", "Nuwaraeliya", "Polonnaruwa", "Trincomalee","Batticaloa", "Jaffna", "Kilinochchi", "Mannaram", "Mulathivu","Vavuniya", "Puttalam", "Ampara", "Hambantota");

 
//  for ($x = 0; $x <= $numberOfSampleData; $x++) {
//     // echo $districts[$x];
// $id=rand(0,$numberOfSampleData);
// $did=rand(0,23);
// $name= "Sample Shop $id";
// $contactNo= "07".rand(0,9999999);
// $district= $districts[$did];
// $nearestTown=$districts[$did];
// $email= "sampleMail$id@samplemail.com";
// $pass= "samplePassword.$id";
// $ownerName= "Sample Owner $id";
// $ownerAddress="Sample Address $id";
// $address="Sample Address $id";
// $NIC=  rand(0,99999999)."v";
// $br_no= rand(0,9999999);

// $ownerEmail=  "sampleMail$id@samplemail.com";   

// $sql = 
// "INSERT INTO `shop`(`id`, `name`, `contactNo`, `address`, `district`, `nearestTown`, `email`, `pass`, `ownerName`, `ownerAddress`, `NIC`, `br_no`, `ownerEmail`, `status`)
//                 VALUES ('','$name','$contactNo','$address','$district','$nearestTown','$email','$pass','$ownerName','$ownerAddress','$NIC','$br_no','$ownerEmail','1')
// ON DUPLICATE KEY UPDATE
// `contactNo`='$contactNo',
// `ownerName`='$ownerName',
// `pass`='$pass',
// `ownerAddress`='$ownerAddress',
// `NIC`='$NIC',
// `br_no`='$br_no',
// `ownerEmail`='$ownerEmail'
// ;
// ";
// //echo $sql;
// if(mysqli_query($conn, $sql)){
//     $totalSuccess=$totalSuccess+1;
//     $myObj=new \stdClass();
//     $myObj->status = 1;
//     $myJSON = json_encode($myObj);
//     echo $myJSON;
//     echo "<br/>";
   
// } else{
//     $myObj=new \stdClass();
//     $myObj->status = 0;
//     $myJSON = json_encode($myObj);
//     echo $myJSON;
//     echo "<br/>";
// }


//  }


// echo "<br/><br/>
// Number Of Attempts= $numberOfSampleData
// <br/>
// Number Of Success Insertions= $totalSuccess";
// mysqli_close($conn);

include 'config.php';
// header("Content-Type: application/json; charset=UTF-8");

 $numberOfSampleData=20;
 $totalSuccess=0;
 $measuringUnits = array("Kg", "g", "M", "Packs", "Item","bottle","leter");

 
 for ($x = 0; $x <= $numberOfSampleData; $x++) {
    // echo $districts[$x];
$id=rand(0,$numberOfSampleData);

$itemCode= rand(0,999999999);
$shop=rand(1,2);
$name= "Test Item $id";
$description= "Sample description $id";;
$qty= rand(0,1550);
$measuringUnit= $measuringUnits[rand(0,5)];
$unitPrice= rand(0,1000);
 

$sql = 
"INSERT INTO  `item`(`id`, `itemCode`, `shop`, `name`, `description`, `qty`, `measuringUnit`, `unitPrice`,`itemLock`,`ImgType`) 
                VALUES ('','$itemCode','$shop','$name','$description','$qty','$measuringUnit','$unitPrice','0','png')
;
";
//echo $sql;
if(mysqli_query($conn, $sql)){
    $totalSuccess=$totalSuccess+1;
    $myObj=new \stdClass();
    $myObj->status = 1;
    $myJSON = json_encode($myObj);
    echo $myJSON;
    echo "<br/>";
   
} else{
    // echo "Error: " . $sql . "<br>" . $conn->error;
    $myObj=new \stdClass();
    $myObj->status = 0;
    $myJSON = json_encode($myObj);
    echo $myJSON;
    echo "<br/>";
}


 }


echo "<br/><br/>
Number Of Attempts= $numberOfSampleData
<br/>
Number Of Success Insertions= $totalSuccess";
mysqli_close($conn);



// include 'config.php';
// // header("Content-Type: application/json; charset=UTF-8");

//  $numberOfSampleData=200;
//  $totalSuccess=0;
//  $measuringUnits = array("Kg", "g", "M", "Packs", "Item","bottle","leter");

 
//  for ($x = 0; $x <= $numberOfSampleData-1; $x++) {
//     // echo $districts[$x];
// $id=rand(0,$numberOfSampleData);
// $item= rand(0,1252 );
// $qty= rand(0,5 );
// $address= "Sample Address $id";
// $trolleyId=rand(0,50);


// $sql = 
// "INSERT INTO  `orders` (`id`, `item`, `qty`,`trolleyId`, `address`, `status`, `timeStamp`)
//                 VALUES ('','$item','$qty','$trolleyId','','PENDING',current_timestamp())
// ON DUPLICATE KEY UPDATE
// `qty`='$qty',
// `timeStamp`=current_timestamp()
// ;
// ";
// //echo $sql;
// if(mysqli_query($conn, $sql)){
//     $totalSuccess=$totalSuccess+1;
//     $myObj=new \stdClass();
//     $myObj->status = 1;
//     $myJSON = json_encode($myObj);
//     echo $myJSON;
//     echo "<br/>";
   
// } else{
//     // echo "Error: " . $sql . "<br>" . $conn->error;
//     $myObj=new \stdClass();
//     $myObj->status = 0;
//     $myJSON = json_encode($myObj);
//     echo $myJSON;
//     echo "<br/>";
// }


//  }


// echo "<br/><br/>
// Number Of Attempts= $numberOfSampleData
// <br/>
// Number Of Success Insertions= $totalSuccess";
// mysqli_close($conn);

?> 