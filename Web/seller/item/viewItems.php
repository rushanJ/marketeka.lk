
<div class="w3-container">
<a href="../addNewItem"><p><button class="w3-button w3-blue w3-round-xxlarge">Add New Item</button></p></a>
<div style="overflow-x:auto;">
  <table  class="w3-table-all">
    <thead>
      <tr class="w3-black">
        <th>Item </th>
        <th>Item Code</th>
        <th>Name</th>
        <th>Description</th>
        <th>Qty</th>
        <th>Unit Price</th>
        <th>Minimum Price</th>
        <th>Purchased Price</th>
        <th>Actions</th>
        
      </tr>
    </thead>
    <tbody>


    <?php
include "../php/getItemList.php";
?>

    </tbody>
  </table>
</div>
</div>