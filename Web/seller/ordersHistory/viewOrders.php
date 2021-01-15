<div class=" w3-card-4 w3-padding-16 w3-panel w3-border w3-round-xlarge" style="margin:5%">
<div class="w3-container">
  
<h1><b> Order History</b></h1><br/>
<!-- <a href="../addNewItem"><p><button class="w3-button w3-blue w3-round-xxlarge">Add New Item</button></p></a> -->
<div style="overflow-x:auto;">
  <table  class="w3-table-all">
    <thead>
      <tr class="w3-blue">
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
include "../php/viewHistory.php";
?>

    </tbody>
  </table>
</div>
</div>
