<?php
// if (isset($_SESSION["nearestTown"])){
//     $nearestTown=$_SESSION["nearestTown"];
//     $itemName= $_REQUEST['itemName'];
// $sql = "SELECT item.id,item.itemCode,item.shop,item.name,item.description,item.qty,item.measuringUnit,item.imgType, item.unitPrice ,shop.name as sName,shop.nearestTown FROM item,shop WHERE shop.id=item.shop AND shop.nearestTown LIKE '%$nearestTown%'AND item.name LIKE '%$itemName%' AND item.itemLock= 0 ORDER BY item.id DESC LIMIT 4";
// }
// else if(isset($_REQUEST["hot"])){ 
//     $itemName= $_REQUEST['itemName'];
   
//     $sql = "SELECT item.id,item.itemCode,item.shop,item.name,item.description,item.qty,item.measuringUnit, item.unitPrice ,item.imgType ,shop.name as sName,shop.nearestTown FROM item,shop WHERE shop.id=item.shop AND item.name LIKE '%$itemName%' AND item.itemLock= 0 ORDER BY item.id";
// }
// else if(isset($_REQUEST["drawar"])){ 
//     $itemName= $_REQUEST['itemName'];
   
//     $sql = "SELECT item.id,item.itemCode,item.shop,item.name,item.description,item.qty,item.measuringUnit, item.unitPrice ,item.imgType ,shop.name as sName,shop.nearestTown FROM item,shop WHERE shop.id=item.shop AND item.name LIKE '%$itemName%' AND item.itemLock= 0 ORDER BY item.id";
// }
// else{ 
//     $district= $_REQUEST['district'];
//     $itemName= $_REQUEST['itemName'];
//     $nearestTown= $_REQUEST['nearestTown'];
    
//     $sql = "SELECT item.id,item.itemCode,item.shop,item.name,item.description,item.qty,item.measuringUnit,item.imgType, item.unitPrice ,shop.name as sName,shop.nearestTown FROM item,shop WHERE shop.id=item.shop AND shop.nearestTown LIKE '%$nearestTown%'AND item.name LIKE '%$itemName%' AND item.itemLock= 0";
// }
$itemName= $_REQUEST['itemName'];
   
$sql = "SELECT item.id,item.itemCode,item.shop,item.name,item.description,item.qty,item.measuringUnit, item.unitPrice ,item.imgType ,shop.name as sName,shop.nearestTown FROM item,shop WHERE shop.id=item.shop AND item.name LIKE '%$itemName%' AND item.itemLock= 0 ORDER BY item.id";
// echo $sql;
include "config.php";

// $result = $conn->query($sql);

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
    $name=$row[3];
             $id=(int)$row[0];
             $unitPrice=$row[7];
             $measuringUnit=$row[6];
             $qty=$row[5];
            //  $unitPrice=$row["unitPrice"];
            //  $unitPrice=$row["unitPrice"];
            //  $unitPrice=$row["unitPrice"];
             $imgType=$row[8];
    
           
            echo "<div class=\"col-md-3 top_brand_left\">
            <div class=\"hover14 column\">
                <div class=\"agile_top_brand_left_grid\">
                    
                    <div class=\"agile_top_brand_left_grid1\">
                        <figure>
                            <div class=\"snipcart-item block\"  >
                                <div class=\"snipcart-thumb\">
                                    <a href=\"../item?itemName=$id\"><img src=\"../images/$id.$imgType\" title=\" $name \" alt=\"  $name \"  style=\"height: 150px;\" /></a>		
                                    <p>$name</p>
                                    <h4>Rs. $unitPrice /$measuringUnit </h4><span>$qty $measuringUnit  Left</span>
                                </div>
                                <div class=\"snipcart-details top_brand_home_details\">
                                <a href=\"../item?itemName=$id\"><span class=\"btn btn-primary btn-lg\">View Items</span></a>
                            
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
//echo $sql;
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//          $name=$row["name"];
//          $id=(int)$row["id"];
//          $unitPrice=$row["unitPrice"];
//          $measuringUnit=$row["measuringUnit"];
//          $qty=$row["qty"];
//          $unitPrice=$row["unitPrice"];
//          $unitPrice=$row["unitPrice"];
//          $unitPrice=$row["unitPrice"];
//          $imgType=$row["imgType"];

       
//         echo "<div class=\"col-md-3 top_brand_left\">
//         <div class=\"hover14 column\">
//             <div class=\"agile_top_brand_left_grid\">
                
//                 <div class=\"agile_top_brand_left_grid1\">
//                     <figure>
//                         <div class=\"snipcart-item block\"  >
//                             <div class=\"snipcart-thumb\">
//                                 <a href=\"../item?itemName=$id\"><img src=\"../images/$id.$imgType\" title=\" $name \" alt=\"  $name \"  style=\"height: 150px;\" /></a>		
//                                 <p>$name</p>
//                                 <h4>Rs. $unitPrice /$measuringUnit </h4><span>$qty $measuringUnit  Left</span>
//                             </div>
//                             <div class=\"snipcart-details top_brand_home_details\">
//                             <a href=\"../item?itemName=$id\"><span class=\"btn btn-primary btn-lg\">View Items</span></a>
                        
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

                ?>