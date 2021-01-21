
<?php
// if (!isset($_SESSION["userId"])) {
// 	header("Location: ../login"); /* Redirect browser */
//     exit();
// }
include "../CommenLayouts/header.php";

 include "../CommenLayouts/navBar.php";
 
  include "../CommenLayouts/breadcrumb.php";

 include "../CommenLayouts/sideDrawer.php";

include "../CommenLayouts/sideDrawerEnd.php";

//include "../CommenLayouts/adPanel.php";

?>


<!-- header -->
	

	
<!-- //header -->
<!-- products-breadcrumb -->
	
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		
		<div class="w3l_banner_nav_right">
<!-- about -->
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>
			
	      <div class="checkout-right">
				
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Product</th>
							<th>SL No.</th>	
							<th>Shop</th>	
							
							<th>Quantity</th>
							<th>Product Name</th>
							<th>Unit Price</th>
							<th>Amount</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
						
					
					<?php
				include "../php/viewCart.php";
				?>
				</tbody></table>
			</div>
			<div class="checkout-left">	
				<div class="col-md-4 checkout-left-basket">
					<h4>SUMMERY</h4>
					<table class="table table-condensed">
    <thead>
      <tr>
        <th>Item</th>
        <th>Cost</th>
 
      </tr>
    </thead>
    <tbody>
	<?php
				include "../php/viewBill.php";
				?>
      
     
    
      </tr>
    </tbody>
  </table>
					
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Add a new Details</h4>
					  <?php
				include "address.php";
				?>
									<div class="checkout-right-basket">
				        	<a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			      	</div>
					</div>
			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->


	<?php
 include "js.php";
?>

</body>
</html>