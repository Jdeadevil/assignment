<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
			<?php include 'scripts.php';?>
     
     		
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>
     <script>   
		 $(document).ready(function(){
	
			$("#registerBox").hide();
	
			$( "#dontHaveAccount" ).click(function() {
			
				$("#registerBox").show("slow");
				
			});
			
				$("li").hover() {

					$(this).toggleClass("current-menu-item");

				};
	
		});
	</script>        

	</head>


	<body>
		
				<?php include 'header.php';?>

			<main class="main-content">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.html">Home</a>
						<span>Contact</span>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="col-md-5">
							<h2 class="section-title">Sign In</h2>
							<p>If you have an account with us, enter your details to sign in.</p>
							<form action="#" class="contact-form">
								<div class="row">
                                	<div class="col-md-6"><input type="text" placeholder="Email Addresss..."></div>
									<div class="col-md-6"><input type="text" placeholder="Your password..."></div>
								</div>
								<div class="row">
								</div>
								<div class="text-right">
                                	<input id="dontHaveAccount" type="submit" placeholder="Send message" value="I don't have an account">
									<input type="submit" placeholder="Send message" value="Sign In">
								</div>
							</form>
						</div>
						<div id="registerBox" class="col-md-6 col-md-offset-1">
							<h2 class="section-title">Registration</h2>
							<p>If you don't already have an account with us, register to get special treatment!</p>
							<form action="#" class="contact-form">
								<div class="row">
									<div class="col-md-6"><input type="text" placeholder="Your name..."></div>
									<div class="col-md-6"><input type="text" placeholder="Email Addresss..."></div>
								</div>
								<div class="row">
									<div class="col-md-6"><input type="text" placeholder="Company name..."></div>
									<div class="col-md-6"><input type="text" placeholder="Website..."></div>
								</div>
								<div class="text-right">
									<input type="submit" placeholder="Send message" value="Register">
								</div>
							</form>

						</div>
					</div>
				</div>
				
			</main> <!-- .main-content -->

				<?php include 'footer.php';?>
				
		</div>
		
	</body>

</html>