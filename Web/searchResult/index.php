<?php

include "../CommenLayouts/header.php";

 include "../CommenLayouts/navBar.php";
 
  include "../CommenLayouts/breadcrumb.php";

 include "../CommenLayouts/sideDrawer.php";

include "../CommenLayouts/sideDrawerEnd.php";

//include "../CommenLayouts/adPanel.php";

?>

	<div class="banner">
		
		<div class="w3l_banner_nav_right">
		
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3>Search Result</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>Products</h6>
					
					<!-- <div class="clearfix"> </div> -->
				</div>
				<?php
				include "../php/search.php";
				?>
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php include "searchItems.php";?>


	<?php
include "js.php";
include "../CommenLayouts/footer.php";
?>