<?php
include 'db.php';
?>
<!DOCTYPE html>
<!--[if IE 7 ]>
	<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
	<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
	<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- =========================================
	head
	========================================== -->

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151393624-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-151393624-1');
	</script>

	<!-- =========================================
	    Basic
	    ========================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sashakt Vihar Construction & Security Pvt. Ltd. - Contact Us</title>
	<meta name="keywords" content="fontanero, HTML5, CSS3, responsive, Template" />
	<meta name="author" content="Cloud Software Solution Ltd." />
	<meta name="description" content="fontanero- Responsive HTML5/CSS3 Template" />

	<!-- =========================================
	    Mobile Configurations
	    ========================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<?php include 'head.php'; ?>
</head>
<!-- /head -->

<body>
	<div class="wrapper" id="wrapper">
		<div class="offcanvas-pusher">
			<div class="content-wrapper">
				<div class="container">
					<div class="row">
						<section class="header">
							<?php include 'header.php'; ?>
							<!-- .header-wrapper-->
						</section>
						<!--End .header -->
					</div>
					<!-- .row-->
				</div>
				<!-- .container-->
				<div class="breadcrumb-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-title">
									<h2>Contact us</h2>
									<ul class="breadcrumb">
										<li><a href="index.php">Home</a></li>
										<li class="active">contact</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- .row-->
					</div>
					<!-- .container-->
				</div>
				<!-- .breadcrumb-area-->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="map-head">
								<h2>Location on map</h2><br>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115133.01016881724!2d85.07300167526476!3d25.608020764115338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1645116994498!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
						<!-- .col-md-12-->
					</div>
					<!-- .row-->
				</div>
				<!-- .container-->
				<div class="container">
					<div class="row">
						<div class="form-section">
							<div class="col-md-8 col-xs-12 col-sm-8">
								<div class="main-contact-form">
									<h4>Contact</h4><br>
									<form action="mail.php" method="POST">
										<input type="text" id="full-name" name="name" placeholder="Name" required>
										<input type="email" id="email" name="email" placeholder="Email" required>
										<input type="text" id="subject" name="subject" placeholder="Subject">
										<input type="tel" id="mobile" name="mblno" placeholder="Mobile no." pattern="\d*" title="Please enter valid mobile no" required>
										<textarea name="message" id="message" cols="30" rows="4" placeholder="Message"></textarea>
										<input type="submit" class="btn" value="submit">
									</form>
								</div>
							</div>
							<div class="col-md-4 col-xs-12 col-sm-4">
								<div class="office-location">
									<div class="contact-us head-office">
										<h4>Address</h4>
										<address>
											Patna<br><br>
										</address>
										<address>
											<span>Email :</span>
											<a href="mailto:info@sashaktvihar.com">info@sashaktvihar.com</a> 
										</address>
										<address>
											<span>Phones :</span>
											<a href="tel:+919470868348">+91 9470868348</a><br>
										</address>
									</div>
									<!-- <div class="contact-us newyork-office">
										<h4>Branch Office</h4>
										<address>
											Mahendra workshop Maghra Gufapar, Parbalpur Road, Biharsharif, Nalanda (Bihar)-803101
										</address>

									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include 'footer.php'; ?>
				<!-- .container-->
			</div>
			<!--content-wrapper-->
		</div>
		<!-- offcanvas-pusher -->

		<?php include 'mobilemenu.php'; ?>
		<!-- offcanvas-menu end -->
	</div>
	<!-- #wrapper -->

	<!-- =========================================
		JAVASCRIPT
		========================================== -->

	<?php include 'foot.php'; ?>
</body>
</html>