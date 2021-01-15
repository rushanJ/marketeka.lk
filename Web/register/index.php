<?php

include "../CommenLayouts/header.php";

 include "../CommenLayouts/navBar.php";
 
  include "../CommenLayouts/breadcrumb.php";

 include "../CommenLayouts/sideDrawer.php";

include "../CommenLayouts/sideDrawerEnd.php";


//include "../CommenLayouts/adPanel.php";

?>

<!-- header -->
	
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		
		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<!-- <h3>Sign In & Sign Up</h3> -->
			<div class="w3_login_module">
				<div class="module form-module">
				  <!-- <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Register  </div>
				  </div> -->
				  <div class="form">
					<h2>Login to your account</h2>	
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Username" required=" ">
					  <input type="password" name="Password" placeholder="Password" required=" ">
					  <input type="submit" value="Login">
					  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Register  </div>
				  </div>
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account </h2>
					<form action="../php/register.php" method="post">
					  <input  type="text" name="name" placeholder="Name" required=" ">
		
					  <input type="email" name="email" placeholder="Email Address" required=" ">
					  <input type="text" name="tp1" placeholder="Phone Number" required=" ">
					  <input type="text" name="tp2" placeholder="Phone Number" required=" ">
					  <input type="text" name="address" placeholder=" Address " required=" ">
					 
					  <select class="form-control" name="district" id="sel1">
						<option value="Colombo">Colombo</option>
						<option value="Gampaha">Gampaha</option>
						<option value="Kalutara">Kalutara</option>
						<option value="Kandy">Kandy</option>
						<option value="Kurunegala">Kurunegala</option>
						<option value="Kegalle">Kegalle</option>
						<option value="Rathnapura">Rathnapura</option>
						<option value="Anuradhapura">Anuradhapura</option>
						<option value="Galle">Galle</option>
						<option value="Mathara">Mathara</option>
						<option value="Badulla">Badulla</option>
						<option value="Mathale">Mathale</option>
						<option value="Nuwaraeliya">Nuwaraeliya</option>
						<option value="Polonnaruwa">Polonnaruwa</option>
						<option value="Trincomalee">Trincomalee</option>
						<option value="Batticaloa">Batticaloa</option>
						<option value="Monaragala">Monaragala</option>
						<option value="Jaffna">Jaffna</option>
						<option value="Kilinochchi">Kilinochchi</option>
						<option value="Mannaram">Mannaram</option>
						<option value="Mulathivu">Mulathivu</option>
						<option value="Vavuniya">Vavuniya</option>
						<option value="Puttalam">Puttalam</option>
						<option value="Ampara">Ampara</option>
						<option value="Hambantota">Hambantota</option>

						<!-- <option value="Colombo">කොලඹ</option>
						<option value="Gampaha">ගම්පහ</option>
						<option value="Kalutara">කලුතර</option>
						<option value="Kandy">මහනුවර</option>
						<option value="Kurunegala">කුරුණෑගල</option>
						<option value="Kegalle">කෑගල්ල</option>
						<option value="Rathnapura">රත්නපුර</option>
						<option value="Anuradhapura">අනුරාධපුර</option>
						<option value="Galle">ගාල්ල</option>
						<option value="Mathara">මාතර</option>
						<option value="Badulla">බදුල්ල</option>
						<option value="Colombo">නුවරඑලිය</option>
						<option value="Nuwaraeliya">මාතලේ</option>
						<option value="Polonnaruwa">පොලොන්නරුව</option>
						<option value="Trincomalee">ත්‍රිකුනාමලය</option>
						<option value="Batticaloa">මඩකලපුව</option>
						<option value="Monaragala">මොනරාගල</option>
						<option value="Jaffna">යාපනය</option>
						<option value="Kilinochchi">කිලිනොච්චි</option>
						<option value="Mannaram">මන්නාරම්</option>
						<option value="Mulathivu">මුලතිව්</option>
						<option value="Vavuniya">වව්නියා</option>
						<option value="Puttalam">පුත්තලම</option>
						<option value="Ampara">අම්පාර</option>
						<option value="Hambantota">හම්බන්තොට</option> -->
						
						
				<!-- </div> -->
					

					</select>
					<br/>
					<input class="w3-" type="text" name="nearestTown" placeholder="Nearest Town" required=" ">
					  <input type="text" name="pass" placeholder="Password" required=" ">
					  <input type="submit" value="Register">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('ctb');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>

<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>