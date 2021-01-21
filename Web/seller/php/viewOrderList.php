<?php
  //  session_start();
$id=$_SESSION["shopId"];
//     $sql = "SELECT distinct(order_item.trollyId) FROM order_item,item,shop WHERE order_item.item=item.id AND item.shop=shop.id AND order_item.status= 'CONFIRMED'";
    include "config.php";

    
// $stmt = sqlsrv_query( $conn, $sql );
// if( $stmt === false) {
//     die( print_r( sqlsrv_errors(), true) );
// }

// while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
//           $trolleyId=$row["trolleyId"];
          $sql1 = "
          SELECT TOP (1000) [id]
                ,[trollyId]
                ,[user]
                ,[timeStamp]
                ,[total]
                ,[address]
                ,[contactNo]
                ,[paymentStatus]
                ,[type]
            FROM [kade].[dbo].[order]";
          
          
            $stmt1 = sqlsrv_query( $conn, $sql1 );
            if( $stmt1 === false) {
                die( print_r( sqlsrv_errors(), true) );
            }

            while( $row1 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC) ) {
              $trolleyId=$row1["trollyId"];
              $tot=$row1["total"];
              $address=$row1["address"];
              $id=$row1["id"];
          $status=$row1["paymentStatus"];
          $timeStamp=$row1["timeStamp"]->format('d/m/Y');;
         
       
          echo "<tr>

          <td>$id</td>
        <td>$tot</td>
        <td>$address</td>
          
          <td>$status</td>
          <td>$timeStamp</td>
          <td>
          <a href =\"../viewOrder?id=$trolleyId\">   <div class=\"w3-left\"><i class=\"fa fa-eye w3-xlarge\"></i></div></a>
        </td>

        </tr>"
        ;
            }

            sqlsrv_free_stmt( $stmt1);

        //   $result1 = $conn->query($sql1);
        //   //echo $sql;
        //   if ($result1->num_rows > 0) {
        //       while($row1 = $result1->fetch_assoc()) { 
        //       $trolleyId=$row1["trolleyId"];
        //       $tot=$row1["tot"];
        //       $address=$row1["address"];

        //   $noOfItems=$row1["noOfItems"];
        //   $status=$row1["status"];
        //   $timeStamp=$row1["timeStamp"];
        //   $remarks=$row1["remarks"];


        //   echo "<tr>

        //   <td>$trolleyId</td>
        // <td>$tot</td>
        // <td>$address</td>
        //   <td>$noOfItems</td>
        //   <td>$status</td>
        //   <td>$remarks</td>
        //   <td>
        //   <a href =\"../viewOrder?id=$trolleyId\">   <div class=\"w3-left\"><i class=\"fa fa-eye w3-xlarge\"></i></div></a>
        // </td>

        // </tr>"
        // ;
// }

// sqlsrv_free_stmt( $stmt);



// //echo $sql;

// $result = $conn->query($sql);
// //echo $sql;
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
// //          $trolleyId=$row["trolleyId"];
// //          $sql1 = "SELECT item.name , order_item.trollyId,sum(item.unitPrice*order_item.qty) as tot, order_item.address, order_item.timeStamp, order_item.status,  order_item.remarks, count(order_item.item) as noOfItems FROM order_item,item,shop WHERE order_item.item=item.id AND item.shop=shop.id AND order_item.trollyId=$trolleyId";
// //          $result1 = $conn->query($sql1);
// //          //echo $sql;
// //          if ($result1->num_rows > 0) {
// //              while($row1 = $result1->fetch_assoc()) { 
// //              $trolleyId=$row1["trolleyId"];
// //              $tot=$row1["tot"];
// //              $address=$row1["address"];

// //          $noOfItems=$row1["noOfItems"];
// //          $status=$row1["status"];
// //          $timeStamp=$row1["timeStamp"];
// //          $remarks=$row1["remarks"];

       
// //          echo "<tr>
      
// //          <td>$trolleyId</td>
// //         <td>$tot</td>
// //         <td>$address</td>
// //          <td>$noOfItems</td>
// //          <td>$status</td>
// //          <td>$remarks</td>
// //          <td>
// //          <a href =\"../viewOrder?id=$trolleyId\">   <div class=\"w3-left\"><i class=\"fa fa-eye w3-xlarge\"></i></div></a>
// //         </td>

// //      </tr>"
// //  ;
// //             }
// //         } 
// //         else {
// //           "No Items Yet";
                 
// //         }
        

     
// //     }
// // } 
// // else {
// //   "No Items Yet";
         
// // }

                ?>