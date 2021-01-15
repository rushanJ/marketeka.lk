
	
<?php
session_start();
//session_unset();
// echo $_SESSION["nearestTown"];
// if (isset($_SESSION["nearestTown"])) echo $_SESSION["nearestTown"];
							
					
								
?>
<!-- header --> 
<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.html">STAY AT HOME !</a>
		</div>
		<div class="w3l_header_nav">
			<a href="../">Home</a>
		</div>
		<div class="w3l_header_nav">
			<a href="../seller">Seller Area</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		
		
		<div class="w3l_header_right1">
		
		<div class="product_list_header">   
			<a href="../cart">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
</a>
		</div>
		
		<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
							<?php
							
							if (isset($_SESSION["name"]))
							{ 
								echo "<li><a href='../myAccount'>".$_SESSION["name"]."</a></li>";
								echo "<li><a href='../php/logout.php'>LogOut</a></li>";
							}
							else {
								echo "<li><a href=\"../login\">Login</a></li> 
								<li><a href=\"../register\">Sign Up</a></li>";
							}
							?>
								
								
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav --> 
	<div class="logo_products" style="background-image: url('../images/banner/black.png');">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<a href="../index.php"><img src="../images/loginLogo.png"style="width: 250px;padding-left:10%;"></a>
			</div>
			<img src="../images/banner/5.jpg"style="width: 400px;hight: 100px;">
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<!-- <li><a href="events.html">Events</a><i>/</i></li> -->
					<!--<li><a href="about.html">About Us</a><i>/</i></li> -->
					<!-- <li><a href="products.html">Best Deals</a><i>/</i></li> -->
					<!--<li><a href="services.html">Services</a></li>-->
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<!--<li><i class="fa fa-phone" aria-hidden="true"></i>Call us (+94)71 95 05 180</li>-->
					<!--<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@critssl.com</a></li>-->
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->



