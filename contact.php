<?php 

if ($_POST["feedback"]) {
	
	if (!$_POST['name']){
		
		$error = "<br/>Please enter your name";
		
	}
	
	if (!$_POST['email']){
		
		$error .= "<br/>Please enter your email";
		
	}
	
	if (!$_POST['message']){
		
		$error .= "<br/>Please enter your message";
		
	}
	
	if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

	$error.="<br />Please enter a valid email address";
	
	}
	
	if ($error){
		
		$result = '<div class="alert alert-danger"><strong>There were error(s) in the form:</strong>'.$error.'</div>';
		
	}

          $body = $_POST["message"];
          mail("placeholder@notActuallyMyEmail.com","Feedback from user",$body);

          }
	
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Compass Starter by Ariona, Rian</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		
		<!-- jQuery Bootstrap scripts -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content" style="background-color:#1e202b;">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">D20 Weather</h1>
							<small class="site-description">Giving you realistic expectations</small>
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="news.html">News</a></li>
							<li class="menu-item"><a href="live-cameras.html">Live cameras</a></li>
							<li class="menu-item"><a href="photos.html">Photos</a></li>
                            <li class="menu-item"><a href="signin.html">Sign In / Register</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
                           	<li class="menu-item"><a href="signout.php">Sign Out</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

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
							<div class="contact-details">
								<div class="map" data-latitude="-6.897789" data-longitude="107.621735"></div>
								<div class="contact-info">
									<address>
										<img src="images/icon-marker.png" alt="">
										<p>Company Name INC. <br>
										2803 Avenue Street, Los Angeles</p>
									</address>
									
									<a href="#"><img src="images/icon-phone.png" alt="">+1 800 314 235</a>
									<a href="#"><img src="images/icon-envelope.png" alt="">contact@companyname.com</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-md-offset-1">
							<h2 class="section-title">Contact us</h2>
							<p>Feel free to send us fan mail, hate mail, ask us a question, or make a suggestion to improve our services. We'll be in touch!</p>
							<?php echo $result; ?>
							
							<form method="post" action="#" class="contact-form">
								<div class="row">
									<div class="col-md-6"><input name="name" type="text" placeholder="Your name..."></div>
									<div class="col-md-6"><input name="email" type="text" placeholder="Email Addresss..."></div>
								</div>
								<div class="row">
									<div class="col-md-6"><input name="company" type="text" placeholder="Company name..."></div>
									<div class="col-md-6"><input name="website" type="text" placeholder="Website..."></div>
								</div>
								<textarea name="message" placeholder="Message..."></textarea>
								<div class="text-right">
									<input name="feedback" type="submit" placeholder="Send message">
								</div>
							</form>

						</div>
					</div>
				</div>
				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<input type="text" placeholder="Enter your email to subscribe...">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

					<p class="colophon">Copyright 2016 D20 Design.</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
