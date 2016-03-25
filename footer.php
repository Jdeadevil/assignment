<footer class="site-footer">

				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<?php

								//$error = false;
								if ($_POST["subsub"]) {
									if ($_POST['subemail']!="" AND !filter_var($_POST['subemail'], FILTER_VALIDATE_EMAIL)) {
										$error=true;
									}
									
									if ($_POST['subemail']=="") {
										$error=true;
									}
									
									if ($error == true) {
										$footerresult = '<div style="height:50px;" class="alert alert-danger">Please enter a valid email address</div>';
									} else {
										$footerresult = '<div style="height:50px;" class="alert alert-success">Thank you! You have been added to our newsletter database</div>';
									}
								}
								
								echo $footerresult;
							
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<form method="post" class="subscribe-form">
								<input name="subemail" type="text" placeholder="Enter your email to subscribe...">
								<input name="subsub" type="submit" value="Subscribe">
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