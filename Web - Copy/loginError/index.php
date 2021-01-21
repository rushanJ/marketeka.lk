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

		
		<div class="w3_login">
		<div class="alert alert-danger " role="alert">
			<strong>Oh snap!</strong> There's something wrong on your email or password. Please try again OR You can chage your password if you fogot your password
		</div>
			<!-- <h3>Sign In & Sign Up</h3> -->
			<div class="w3_login_module">
				
				<div class="module form-module">
				
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Register  </div>
				  </div>
				 
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="../php/auth.php" method="post">
					  <input type="text" name="userName" placeholder="Username" required=" ">
					  <input type="password" name="pass" placeholder="Password" required=" ">
					  <input type="submit" value="Login">
					  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Register  </div>
				  </div>
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="#" method="post">
					  <input type="text" name="Username" placeholder="Username" required=" ">
					  <input type="password" name="Password" placeholder="Password" required=" ">
					  <input type="email" name="Email" placeholder="Email Address" required=" ">
					  <input type="text" name="Phone" placeholder="Phone Number" required=" ">
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

		</div>
	
	</div>


	<?php
include "js.php";
include "../CommenLayouts/footer.php";
?>