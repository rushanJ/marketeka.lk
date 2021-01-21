
<?php

if (isset($_SESSION["nearestTown"])){
echo "
<div class=\"top-brands\">
		<div class=\"container\">
			
			<div class=\"agile_top_brands_grids\">
            <div class=\"well\">

<h2 id=\"h2.-bootstrap-heading\">Find What you want</h2>
<br/>

<br/>
<form class=\"form-inline\" method= \"get\" action=\"../searchResult\">
  <div class=\"form-group\">
  <div class=\"input-group\">
				<span class=\"input-group-addon\" id=\"sizing-addon2\">Item Name</span>
				<input required name=\"itemName\" style=\"width:10\" type=\"text\" class=\"form-control\" placeholder=\"Enter Item Name\" aria-describedby=\"sizing-addon2\" style=\"width:200px;\">
			</div>
  </div>
  
  
 
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Find</button>
            </div>
</form>
                
</div>
				
				
				
				<div class=\"clearfix\"> </div>
			</div>
		</div>
    </div>";
    
    
}

else echo "
<div class=\"top-brands\">
		<div class=\"container\">
			
			<div class=\"agile_top_brands_grids\">
            <div class=\"well\">

<h2 id=\"h2.-bootstrap-heading\">ඔබට අවශ්‍ය ද්‍රව්‍යය තෝරන්න</h2>
<br/>

<br/>
<form class=\"form-inline\" method= \"GET\" action=\"../searchResult\">
  <div class=\"form-group\">
  <div class=\"input-group\">
				<span class=\"input-group-addon\" id=\"sizing-addon2\">ද්‍රව්‍යයේ නම</span>
				<input required name=\"itemName\"  type=\"text\" class=\"form-control\" placeholder=\"ඔබට අවශ්‍ය ද්‍රව්‍යයේ නම මෙහි සඳහන් කරන්න\" aria-describedby=\"sizing-addon2\">
			</div>
  </div>
  <div class=\"input-group\">
				<span class=\"input-group-addon\" id=\"sizing-addon2\">දිස්ත්‍රික්කය</span>
				<select name=\"district\" class=\"form-control\" id=\"sel1\" required>
        <option value=\"Colombo\">Colombo</option>
        <option value=\"Gampaha\">Gampaha</option>
        <option value=\"Kalutara\">Kalutara</option>
        <option value=\"Kandy\">Kandy</option>
        <option value=\"Kurunegala\">Kurunegala</option>
        <option value=\"Kegalle\">Kegalle</option>
        <option value=\"Rathnapura\">Rathnapura</option>
        <option value=\"Anuradhapura\">Anuradhapura</option>
        <option value=\"Galle\">Galle</option>
        <option value=\"Mathara\">Mathara</option>
        <option value=\"Badulla\">Badulla</option>
        <option value=\"Colombo\">Colombo</option>
        <option value=\"Nuwaraeliya\">Nuwaraeliya</option>
        <option value=\"Polonnaruwa\">Polonnaruwa</option>
        <option value=\"Trincomalee\">Trincomalee</option>
        <option value=\"Batticaloa\">Batticaloa</option>
        <option value=\"Monaragala\">Monaragala</option>
        <option value=\"Jaffna\">Jaffna</option>
        <option value=\"Kilinochchi\">Kilinochchi</option>
        <option value=\"Mannaram\">Mannaram</option>
        <option value=\"Mulathivu\">Mulathivu</option>
        <option value=\"Vavuniya\">Vavuniya</option>
        <option value=\"Puttalam\">Puttalam</option>
        <option value=\"Ampara\">Ampara</option>
        <option value=\"Hambantota\">Hambantota</option>

        <!-- <option value=\"Colombo\">කොලඹ</option>
        <option value=\"Gampaha\">ගම්පහ</option>
        <option value=\"Kalutara\">කලුතර</option>
        <option value=\"Kandy\">මහනුවර</option>
        <option value=\"Kurunegala\">කුරුණෑගල</option>
        <option value=\"Kegalle\">කෑගල්ල</option>
        <option value=\"Rathnapura\">රත්නපුර</option>
        <option value=\"Anuradhapura\">අනුරාධපුර</option>
        <option value=\"Galle\">ගාල්ල</option>
        <option value=\"Mathara\">මාතර</option>
        <option value=\"Badulla\">බදුල්ල</option>
        <option value=\"Colombo\">නුවරඑලිය</option>
        <option value=\"Nuwaraeliya\">මාතලේ</option>
        <option value=\"Polonnaruwa\">පොලොන්නරුව</option>
        <option value=\"Trincomalee\">ත්‍රිකුනාමලය</option>
        <option value=\"Batticaloa\">මඩකලපුව</option>
        <option value=\"Monaragala\">මොනරාගල</option>
        <option value=\"Jaffna\">යාපනය</option>
        <option value=\"Kilinochchi\">කිලිනොච්චි</option>
        <option value=\"Mannaram\">මන්නාරම්</option>
        <option value=\"Mulathivu\">මුලතිව්</option>
        <option value=\"Vavuniya\">වව්නියා</option>
        <option value=\"Puttalam\">පුත්තලම</option>
        <option value=\"Ampara\">අම්පාර</option>
        <option value=\"Hambantota\">හම්බන්තොට</option> -->
        
        
  <!-- </div> -->
       

      </select>
     
			
  </div>
  
  <div class=\"input-group\">
				<span class=\"input-group-addon\" id=\"sizing-addon2\"> ආසන්නම නගරය</span>
				<input name=\"nearestTown\" type=\"text\" required class=\"form-control\" placeholder=\"ඔබට  ආසන්නම නගරය මෙහි සඳහන් කරන්න\" aria-describedby=\"sizing-addon2\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">සොයන්න</button>
            </div>
</form>
                
</div>
				
				
				
				<div class=\"clearfix\"> </div>
			</div>
		</div>
    </div>";
    
    
    ?>