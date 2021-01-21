<?php
if (isset($_SESSION["nearestTown"])){
    $nearestTown=$_SESSION["nearestTown"];
//$sql = "SELECT distinct (item.name)   FROM item,shop WHERE shop.id=item.shop AND shop.nearestTown LIKE '%$nearestTown%' AND item.itemLock= 0 ORDER BY item.id DESC";
$sql = "SELECT TOP 20  item.name  FROM item,shop WHERE shop.id=item.shop AND item.itemLock= 0 ORDER BY item.id DESC ";    
}
else $sql = "SELECT TOP 20  item.name  FROM item,shop WHERE shop.id=item.shop AND item.itemLock= 0 ORDER BY item.id DESC ";

//echo $sql;
include "config.php";
// $result = $conn->query($sql);
// //echo $sql;
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//          $name=$row["name"];
        

//          $sql1 = "SELECT * FROM item WHERE name  LIKE '$name' limit 1";
//          //echo $sql1;

//          $result1 = $conn->query($sql1);
         
//          if ($result1->num_rows > 0) {
//              // output data of each row
//              while($row1 = $result1->fetch_assoc()) {
//                 $id=$row1["id"];
//                 $imgType=$row1["imgType"];
//              }
//             } else {
//                 $id=0;
//                 $imgType="png";
//             }

              
//         echo "<div class=\"col-md-3 top_brand_left\">
//         <div class=\"hover14 column\">
//             <div class=\"agile_top_brand_left_grid\">
                
//                 <div class=\"agile_top_brand_left_grid1\">
//                     <figure>
//                         <div class=\"snipcart-item block\" >
//                             <div class=\"snipcart-thumb\">
//                                 <a href=\"../searchResult?itemName=$name&hot\"><img src=\"../images/$id.$imgType\" title=\" $name \" alt=\"  $name \" style=\"height: 150px;\" /></a>		
//                                 <p>$name</p>
//                             </div>
//                             <div class=\"snipcart-details top_brand_home_details\">
//                             <a href=\"../searchResult?itemName=$name&hot\"><span class=\"btn btn-primary btn-lg\">View Items</span></a>
                        
//                             </div>
//                         </div>
//                     </figure>
//                 </div>
//             </div>
//         </div>
//     </div>
//     "
// ;
     
//     }
// } 
// else {
//   "No Items Yet";
         
// }


$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
    "No Items Yet";
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
      //echo $row[0].", ".$row[1]."<br />";
        $name=$row[0];
        $sql1 = "SELECT  TOP 1 * FROM item WHERE name  LIKE '$name' ";
        $stmt1 = sqlsrv_query( $conn, $sql1 );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
                $id=0;
                $imgType="png";
            }

            while( $row1 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_NUMERIC) ) {
               
                $id=$row1[0];
                $imgType=$row1[11];
            }

            sqlsrv_free_stmt( $stmt1);
      
         
            

              
        echo "<div class=\"col-md-3 top_brand_left\">
        <div class=\"hover14 column\">
            <div class=\"agile_top_brand_left_grid\">
                
                <div class=\"agile_top_brand_left_grid1\">
                    <figure>
                        <div class=\"snipcart-item block\" >
                            <div class=\"snipcart-thumb\">
                                <a href=\"../searchResult?itemName=$name&hot\"><img src=\"../images/$id.$imgType\" title=\" $name \" alt=\"  $name \" style=\"height: 150px;\" /></a>		
                                <p>$name</p>
                            </div>
                            <div class=\"snipcart-details top_brand_home_details\">
                            <a href=\"../searchResult?itemName=$name&hot\"><span class=\"btn btn-primary btn-lg\">View Items</span></a>
                        
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    "
;
     
    }


sqlsrv_free_stmt( $stmt);





                ?>