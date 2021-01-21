    <?php
  //  session_start();

  $dates=array();
  $sales=array();
   $values=array();
   for ($x = 0; $x <= 30; $x++) {
  // echo date('d.m.Y',strtotime("-$x days"));
  array_push($dates,date('Y-m-d',strtotime("-$x days")));
  array_push($sales,0);
  
    $date=date('Y-m-d',strtotime("-$x days"));
    $id=$_SESSION["shopId"];
    $sql = "SELECT sum(qty*unitPrice) AS sales FROM getSales WHERE timestamp = '$date'";

    // echo $sql;
    include "config.php";



    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

    $salesTot=$row["sales"];
    if ( $salesTot)
    $sales[$x]=$salesTot;

    
    // $unitPrice=$row["unitPrice"];
    // $timeStamp=$row["timeStamp"];



    }

    sqlsrv_free_stmt( $stmt);

  // $dates= $dates.
}


  $items=array();
  $itemSales=array();
   $values=array();
  
    $id=$_SESSION["shopId"];
    $sql = "SELECT sum(qty) as qty,name
    FROM getSales
    GROUP BY name";

    // echo $sql;
    include "config.php";



    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

    $name=$row["name"];
    $qty=$row["qty"];
    array_push($items,$name);
    array_push($itemSales, $qty);
    
    // $unitPrice=$row["unitPrice"];
    // $timeStamp=$row["timeStamp"];



    }

    sqlsrv_free_stmt( $stmt);

  // $dates= $dates.


  
  $items1=array();
  $itemSales1=array();
   $itemViews=array();
  
    $id=$_SESSION["shopId"];
    $sql = "SELECT * FROM getSalesVsViews";

    // echo $sql;
    include "config.php";



    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

    $name=$row["name"];
    $orderCount=$row["orderCount"];
    $viewCount=$row["viewCount"];
    array_push($items1,$name);
    array_push($itemSales1, $orderCount);
    array_push($itemViews, $viewCount);
    
    // $unitPrice=$row["unitPrice"];
    // $timeStamp=$row["timeStamp"];



    }

    sqlsrv_free_stmt( $stmt);

  // $dates= $dates.


  















$sales=array_reverse($sales);
$dates=array_reverse($dates);
$items=array_reverse($items);
$itemSales=array_reverse($itemSales);

$items1=array_reverse($items1);
$itemSales1=array_reverse($itemSales1);
$itemViews=array_reverse($itemViews);



$itemOutputNames1= "";
for ($x = 0; $x <=  count($items1)-1; $x++) {
  // echo date('d.m.Y',strtotime("-$x days"));
  $itemOutputNames1=$itemOutputNames1."'".$items1[$x]."',";
}
$itemOutputNames1="[".$itemOutputNames1."]";



$itemOutputorderCount= "";
for ($x = 0; $x <=  count($itemSales1)-1; $x++) {
  // echo date('d.m.Y',strtotime("-$x days"));
  $itemOutputorderCount=$itemOutputorderCount."'".$itemSales1[$x]."',";
}
$itemOutputorderCount="[".$itemOutputorderCount."]";



$itemOutputViewCount= "";
for ($x = 0; $x <=  count($itemViews)-1; $x++) {
  // echo date('d.m.Y',strtotime("-$x days"));
  $itemOutputViewCount=$itemOutputViewCount."'".$itemViews[$x]."',";
}
$itemOutputViewCount="[".$itemOutputViewCount."]";


$valuesOutputSales= "";
for ($x = 0; $x <=  count($sales)-1; $x++) {
  // echo date('d.m.Y',strtotime("-$x days"));
  $valuesOutputSales=$valuesOutputSales."'".$sales[$x]."',";
}
$valuesOutputSales="[".$valuesOutputSales."]";

// echo $valuesOutputSales;

$datesOutputSales= "";
for ($x = 0; $x <=  count($dates)-1; $x++) {
  // echo date('d.m.Y',strtotime("-$x days"));
  $datesOutputSales=$datesOutputSales."'".$dates[$x]."',";
}
$datesOutputSales="[".$datesOutputSales."]";


$itemOutputNames= "";
for ($x = 0; $x <= count($items)-1; $x++) {
  // echo date('d.m.Y',strtotime("-$x days"));
  $itemOutputNames=$itemOutputNames."'".$items[$x]."',";
}
$itemOutputNames="[".$itemOutputNames."]";



$itemOutputSales= "";
for ($x = 0; $x <=  count($itemSales)-1; $x++) {
  // echo date('d.m.Y',strtotime("-$x days"));
  $itemOutputSales=$itemOutputSales."'".$itemSales[$x]."',";
}
$itemOutputSales="[".$itemOutputSales."]";



                ?>