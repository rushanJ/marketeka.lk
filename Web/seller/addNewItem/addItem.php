
<div class="w3-half"  style="margin-left:25%">
<div class="w3-card-4 w3-panel w3-border w3-round-xxlarge">
  <div class="w3-container w3-flat-turquoise">
  <h2><b><i class="fa fa-plus"></i>Add New Item</b></h2>
    
  </div>
  <form class="w3-container" method="POST" action="../php/addItem.php" enctype="multipart/form-data">
    <p>      
    <label class="w3-text-flat-turquoise"><b> Item Code</b></label>
    <input class="w3-input w3-border w3-sand  w3-round-xxlarge" name="itemCode" type="text"></p>
    <p>      
    <label class="w3-text-flat-turquoise"><b>Name</b></label>
    <input class="w3-input w3-border w3-sand  w3-round-xxlarge" name="name" type="text"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Description</b></label>
    <textarea  class="w3-input w3-border w3-sand  w3-round-xxlarge" name="description" ></textarea></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Current Quantity</b></label>
    <input class="w3-input w3-border w3-sand  w3-round-xxlarge" name="qty" type="text"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Measuring Unit(ex Kg, Leter, Bottle, Pack)</b></label>
    <input class="w3-input w3-border w3-sand  w3-round-xxlarge"  name="measuringUnit" type="text"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Unit Price</b></label>
    <input class="w3-input w3-border w3-sand  w3-round-xxlarge"  name="unitPrice" type="number"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Minimum Price</b></label>
    <input class="w3-input w3-border w3-sand  w3-round-xxlarge"  name="minPrice" type="number"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Purchase Price</b></label>
    <input class="w3-input w3-border w3-sand  w3-round-xxlarge"  name="purchasePrice" type="number"></p>
    <p>
    <label class="w3-text-flat-turquoise"><b>Image</b></label>
    <input class="w3-input w3-border w3-sand  w3-round-xxlarge"  name="itemImg" type="file"></p>
    <p>
    
    
    <button class="w3-btn w3-flat-turquoise w3-blue  w3-round-xxlarge">Add</button></p>
  </form>
</div>
</div>