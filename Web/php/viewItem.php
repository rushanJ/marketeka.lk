<?php

    $itemName= $_REQUEST['itemName'];
    
    // $sql = "SELECT `item`.`id`,`item`.`itemCode`,`item`.`shop`,`item`.`name`,`item`.`description`,`item`.`qty`,`item`.`measuringUnit`, `item`.`unitPrice` ,`item`.`imgType` ,`shop`.`name` as `sName`,`shop`.`nearestTown` FROM `item`,`shop` WHERE `shop`.`id`=`item`.`shop` AND `item`.`id` = '$itemName'  ORDER BY `item`.`id`";

    $sql="CALL `getItemInfo`($itemName);";

//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $name=$row["name"];
         $id=(int)$row["id"];
         $unitPrice=$row["unitPrice"];
         $measuringUnit=$row["measuringUnit"];
         $qty=$row["qty"];
         $description=$row["description"];
         $unitPrice=$row["unitPrice"];
         $unitPrice=$row["unitPrice"];
         $unitPrice=$row["unitPrice"];
         $imgType=$row["imgType"];
         $sName=$row["sName"];

       
        echo "

        
<div style='margin-left:50px'>
<h2>$name </h2>
<div class=\"col-md-4 agileinfo_single_left\">
    <img id=\"example\" src=\"../images/$id.$imgType\" alt=\" \" class=\"img-responsive\" />
</div>
<div class=\"col-md-8 agileinfo_single_right\">
<h4>Shop/Seller : $sName</h4>
    <div class=\"w3agile_description\">
        <h4>Description :</h4>
        <textarea readonly rows='6' cols='50' style='border:none'>$description.</textarea>
    </div>
    <div class=\"snipcart-item block\">
        <div class=\"snipcart-thumb agileinfo_single_right_snipcart\">
            <h4>Rs.$unitPrice /$measuringUnit </h4>
        </div>
        <div class=\"snipcart-details agileinfo_single_right_details\">
            <form action=\"../php/addOrder.php\" method=\"post\">
            <input type=\"hidden\" name=\"itemId\" value=\"$id\" />
            <div class=\"input-group\">
				<span class=\"input-group-addon\" id=\"sizing-addon2\">Quantity</span>
				<input   required name=\"qty\"  type=\"number\"  min=1 max=5  value=\"1\" aria-describedby=\"sizing-addon2\">
			</div>
                <fieldset>
                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                    <input type=\"hidden\" name=\"business\" value=\" \" />
                    <input type=\"hidden\" name=\"item_name\" value=\"pulao basmati rice\" />
                    <input type=\"hidden\" name=\"amount\" value=\"21.00\" />
                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                    <input type=\"hidden\" name=\"return\" value=\" \" />
                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                    <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div class=\"clearfix\"> </div>
</div>



    "
;
     
    }
} 
else {
  "Something Went Wrong!";
         
}

                ?>
