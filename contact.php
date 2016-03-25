<?php 

$error = false;

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
		
	} else {
     
				$to = "	Jdeadevil@gmail.com";
				$name = $_POST["name"];
				$email = $_POST['email'];
				$subject = "Message from $name | D20 Weather";
				$body = "From: ".$name."\n"."Email: ".$email."\n"."\n"."Body: ".$_POST['message'];
					if(mail($to,$subject,$body)) {
						$result = '<div class="alert alert-success">Your message has been sent successfully</div>';
					} else {
						$result = '<div class="alert alert-danger"><strong>Your message has not been sent due to an error</strong></div>';
					}

    }
	
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
			<?php include 'scripts.php';?>

<script>
	$(document).ready(function() {

		$("li").hover() {
			
			$(this).toggleClass("current-menu-item");
		
		}

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

				<?php include 'footer.php';?>
				
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>