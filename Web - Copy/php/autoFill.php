<?php
// include 'config.php';
// header("Content-Type: application/json; charset=UTF-8");

//  $numberOfSampleData=1200;
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
// $deliveryChargeType=1;
// $charge=rand(0,250);
// $pass='12345';

// $ownerEmail=  "sampleMail$id@samplemail.com";   
// $sql = 
// "INSERT INTO shop(name, contactNo, address, district, nearestTown,deliveryChargeType,charge, email, pass, ownerName, ownerAddress, NIC, br_no, ownerEmail, status)
//                 VALUES ('$name','$contactNo','$address','$district','$nearestTown','$deliveryChargeType','$charge','$email','$email','$ownerName','$ownerAddress','$NIC','$br_no','$ownerEmail','1')";
// echo $sql;
// $params = array();

//     $stmt = sqlsrv_query( $conn, $sql, $params);
    
// 	if( $stmt === false ) {
// 		 die( print_r( sqlsrv_errors(), true));
// 	}
// 	else
// 	{
//         echo "Record add successfully";
//         $row = sqlsrv_fetch_array($stmt); 
//         echo "ROW INSERTED WITH ID : " . $row["id"];
//         echo "<br>";
// 	}


//  }




//  include 'config.php';
// header("Content-Type: application/json; charset=UTF-8");
// include 'Trolley.php';

//  $numberOfSampleData=1200;
//  $totalSuccess=0;
//  $districts = array("Colombo", "Gampaha", "Kalutara", "Kandy", "Kurunegala","Kegalle", "Rathnapura", "Anuradhapura", "Galle", "Mathara","Badulla", "Mathale", "Nuwaraeliya", "Polonnaruwa", "Trincomalee","Batticaloa", "Jaffna", "Kilinochchi", "Mannaram", "Mulathivu","Vavuniya", "Puttalam", "Ampara", "Hambantota");

//  $fNames = array("Pubudu", "Ravindu", "Nirmani", "Ishara", "Madushani","Tina", "Janith", "Dasuni", "Nethmi", "Nuwantha","Nipun", "Harsha", "Kaveeshya", "Polonnaruwa", "Sachini","Kasun", "Harindu", "Kilinochchi", "Shakila");
//  $lastNames = array("Wijekoon", "Samarasinghe", "Abeysinghe", "Liyanage", "Gunasekara","Diago", "Dissanayake", "Wanigasekara", "Jayasinghe", "Dabare","Wijesooriya", "Gunawardana", "Thenuwara", "Rathnayake", "Weerasinghe","Rathnayake");

 
//  for ($x = 0; $x <= $numberOfSampleData; $x++) {
//     // echo $districts[$x];
// $id=rand(0,$numberOfSampleData);
// $did=rand(0,23);
// $did2=rand(0,15);
// $did2=rand(0,15);
// $name= $fNames[$did2]+" "+ $lastNames[$did1];
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
// $deliveryChargeType=1;
// $charge=rand(0,250);
// $pass='12345';
// $trolleyId=getTrolley();

// $ownerEmail=  "sampleMail$id@samplemail.com";   

// $sql = 
// "INSERT INTO user (name, email, tp1, tp2, address, district, nearestTown, pass,trolleyId) 
//                 VALUES ('$name','$email','$contactNo','$contactNo','$address','$district','$nearestTown','$pass','$trolleyId')
// ;
// ";

// echo $sql;
// $params = array();

//     $stmt = sqlsrv_query( $conn, $sql, $params);
    
// 	if( $stmt === false ) {
// 		 die( print_r( sqlsrv_errors(), true));
// 	}
// 	else
// 	{
//         echo "Record add successfully";
//         $row = sqlsrv_fetch_array($stmt); 
//         echo "ROW INSERTED WITH ID : " . $row["id"];
//         echo "<br>";
// 	}


//  }








// echo "<br/><br/>
// Number Of Attempts= $numberOfSampleData
// <br/>
// Number Of Success Insertions= $totalSuccess";
// mysqli_close($conn);

// include 'config.php';
//  $numberOfSampleData=200;
//  $totalSuccess=0;
//  $measuringUnits = array("Kg", "g", "M", "Packs", "Item","bottle","leter");
//  for ($x = 0; $x <= $numberOfSampleData; $x++) {
//     // echo $districts[$x];
// $id=rand(0,$numberOfSampleData);
// $itemCode= rand(0,999999999);
// $shop=rand(1,40);
// $name= "Test Item $id";
// $description= "Sample description $id";;
// $qty= rand(0,1550);
// $measuringUnit= $measuringUnits[rand(0,5)];
// $unitPrice= rand(0,1000);
// $sql = 
// "INSERT INTO  item( itemCode, shop, name, description, qty, measuringUnit, unitPrice,minPrice,purchasePrice,itemLock,ImgType) 
//                 VALUES ('$itemCode','$shop','$name','$description','$qty','$measuringUnit','$unitPrice',0,0,'0','png')
// ;
// ";
// echo $sql;
// $params = array();
//     $stmt = sqlsrv_query( $conn, $sql, $params);
// 	if( $stmt === false ) {
// 		// die( print_r( sqlsrv_errors(), true));
// 	}
// 	else
// 	{
//         echo "Record add successfully";       
// 	}
//  }




include 'config.php';
 $numberOfSampleData=10;
 $totalSuccess=0;
 $measuringUnits = array("Kg", "g", "M", "Packs", "Item","bottle","leter");
 for ($x = 0; $x <= $numberOfSampleData; $x++) {
    // echo $districts[$x];
$id=rand(0,$numberOfSampleData);
$itemCode= rand(0,999999999);
$shop=rand(1,30);
$year=rand(2020,2021);
$month=rand(1,12);
$date=rand(1,30);
$total=rand(500,10000000);
$address= "Sample Address $id";;
$qty= rand(0,1550);
$measuringUnit= $measuringUnits[rand(0,5)];
$unitPrice= rand(0,1000);
$sql = 
"INSERT INTO [order]( trollyId, [user], timeStamp, total, address, contactNo, paymentStatus, type)
 VALUES ('$id','$shop','$year-$month-$date','$total','$address',0,0,1);
";
echo $sql;
$params = array();
    $stmt = sqlsrv_query( $conn, $sql, $params);
	if( $stmt === false ) {
		// die( print_r( sqlsrv_errors(), true));
	}
	else
	{
        echo "</br>";       
	}
 }



// include 'config.php';
//  $numberOfSampleData=120000;
//  $totalSuccess=0;
//  $measuringUnits = array("Kg", "g", "M", "Packs", "Item","bottle","leter");
//  for ($x = 0; $x <= $numberOfSampleData; $x++) {
//     // echo $districts[$x];
// $id=rand(0,120);
// $itemCode= rand(0,150);
// $shop=rand(1,20);
// $year=rand(2020,2021);
// $month=rand(1,12);
// $date=rand(1,30);
// $total=rand(500,10000000);
// $address= "Sample Address $id";;
// $qty= rand(0,1550);
// $order= rand(1800,1801);
// $measuringUnit= $measuringUnits[rand(0,5)];
// $unitPrice= rand(0,1000);
// $sql = 
// "INSERT INTO order_item( item, qty, trollyId, status, timeStamp, [order]) 
// VALUES ('$itemCode','$qty','$id','COMPLEATED','$year-$month-$date','1553');
// ";
// echo $sql;
// $params = array();
//     $stmt = sqlsrv_query( $conn, $sql, $params);
// 	if( $stmt === false ) {
// 		//die( print_r( sqlsrv_errors(), true));
// 	}
// 	else
// 	{
//         echo "Record add successfully";       
// 	}
//  }




?> 