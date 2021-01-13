
<div class="w3-card-4">
  <div class="w3-container w3-flat-turquoise">
    
  </div>
  <form class="w3-container" method="POST" action="../php/addItem.php" enctype="multipart/form-data">
    <p>      
    <label class="w3-text-flat-turquoise"><b> Item Code</b></label>
    <input class="w3-input w3-border w3-sand" name="itemCode" type="text"></p>
    <p>      
    <label class="w3-text-flat-turquoise"><b>Name</b></label>
    <input class="w3-input w3-border w3-sand" name="name" type="text"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Description</b></label>
    <textarea  class="w3-input w3-border w3-sand" name="description" ></textarea></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Current Quantity</b></label>
    <input class="w3-input w3-border w3-sand" name="qty" type="text"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Measuring Unit(ex Kg, Leter, Bottle, Pack)</b></label>
    <input class="w3-input w3-border w3-sand"  name="measuringUnit" type="text"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Unit Price</b></label>
    <input class="w3-input w3-border w3-sand"  name="unitPrice" type="number"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Minimum Price</b></label>
    <input class="w3-input w3-border w3-sand"  name="minPrice" type="number"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Purchase Price</b></label>
    <input class="w3-input w3-border w3-sand"  name="purchasePrice" type="number"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Image</b></label>
    <input class="w3-input w3-border w3-sand"  name="itemImg" type="file"></p>
    <p>
    
    
    <button class="w3-btn w3-flat-turquoise w3-blue">Add</button></p>
  </form>
</div>