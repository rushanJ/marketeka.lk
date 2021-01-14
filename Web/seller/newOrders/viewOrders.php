
<div class="w3-container">
<!-- <a href="../addNewItem"><p><button class="w3-button w3-blue w3-round-xxlarge">Add New Item</button></p></a> -->
<div style="overflow-x:auto;">
  <table  class="w3-table-all">
    <thead>
      <tr class="w3-black">
        <th>OrderId </th>
        <th>Total Amount</th>
        <th>Address</th>
        <th># of Items</th>
        <th>Status</th>
        <th>Remarks</th>
        <th>Actions</th>
        
      </tr>
    </thead>
    <tbody>


    <?php
include "../php/viewOrderList.php";
?>

    </tbody>
  </table>
</div>
</div>