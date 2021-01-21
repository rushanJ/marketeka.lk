    <?php
  //  session_start();
$id=$_REQUEST["id"];
    $sql = "SELECT * FROM `item` WHERE `item`.`id`= $id AND `item`.`itemLock`= 0  ORDER BY `item`.`id`";

//echo $sql;
include "config.php";
$result = $conn->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $name=$row["name"];
         $itemCode=$row["itemCode"];
         $id=(int)$row["id"];
         $unitPrice=$row["unitPrice"];
         $measuringUnit=$row["measuringUnit"];
         $qty=$row["qty"];
         $unitPrice=$row["unitPrice"];
         $minPrice=$row["minPrice"];
         $purchasePrice=$row["purchasePrice"];
         $description=$row["description"];
         $imgType=$row["imgType"];

       
        echo "
        
        <p>      
    <label class=\"w3-text-flat-turquoise\"><b> Item Code</b></label>
    <input class=\"w3-input w3-border w3-sand\" name=\"itemCode\" type=\"text\" value='$itemCode' readonly></p>
    <p>      
    <label class=\"w3-text-flat-turquoise\"><b>Name</b></label>
    <input class=\"w3-input w3-border w3-sand\" name=\"name\" type=\"text\" value='$name' ></p>
    <p>
    <label class=\"w3-text-flat-turquoise\"><b>Description</b></label>
    <input class=\"w3-input w3-border w3-sand\" name=\"description\" type=\"text\" value='$description' ></p>
    <p>
    <label class=\"w3-text-flat-turquoise\"><b>Current Quantity</b></label>
    <input class=\"w3-input w3-border w3-sand\" name=\"qty\" type=\"text\" value='$qty' ></p>
    <p>
    <label class=\"w3-text-flat-turquoise\"><b>Measuring Unit(ex Kg, Leter, Bottle, Pack)</b></label>
    <input class=\"w3-input w3-border w3-sand\"  name=\"measuringUnit\" type=\"text\" value='$measuringUnit'  ></p>
    <p>
    <label class=\"w3-text-flat-turquoise\"><b>Unit Price</b></label>
    <input class=\"w3-input w3-border w3-sand\"  name=\"unitPrice\" type=\"text\" value='$unitPrice' ></p>
    <p>
    <label class=\"w3-text-flat-turquoise\"><b>Minimum Price</b></label>
    <input class=\"w3-input w3-border w3-sand\"  name=\"minPrice\" type=\"text\" value='$minPrice' ></p>
    <p>
    <label class=\"w3-text-flat-turquoise\"><b>Purchase Price</b></label>
    <input class=\"w3-input w3-border w3-sand\"  name=\"purchasePrice\" type=\"text\" value='$purchasePrice' ></p>
    <p>
    
        
        
        "
;
     
    }
} 
else {
  "No Items Yet";
         
}

                ?>