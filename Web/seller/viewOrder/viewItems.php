
<div class="w3-container">
<div style="overflow-x:auto;">
  <table  class="w3-table-all">
    <thead>
      <tr class="w3-black">
        <th>Item </th>
        <th>Item Code</th>
        <th>Name</th>
     
        <th>Qty</th>
       
       
        
      </tr>
    </thead>
    <tbody>


    <?php
include "../php/getOrderItemList.php";
?>

    </tbody>
  </table>
  <?php $id= $_REQUEST["id"] ?>
<a href="../php/orderAction.php?id=<?php echo $id ?>&action=CONFIRMED" ><p><button class="w3-button w3-blue w3-round-xxlarge">Accept Order</button></a>
<a href="../php/orderAction.php?id=<?php echo $id ?>&action=REJECTED "><button class="w3-button w3-red w3-round-xxlarge">Reject Order</button></p></a>

</div>
</div>