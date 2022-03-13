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
	<title>Sashakt Vihar Construction & Security Pvt. Ltd. - Our Team</title>
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
									<h2>Our Team</h2>
									<ul class="breadcrumb">
										<li><a href="index.php">Home</a></li>
										<li class="active">Our Team</li>
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
							<center>
								<br><br><br>
								<h1>Our Team in our Company</h1>
							</center>
							<!--<p>Not another fluffy team presentation</p>-->
							<!-- ********* <3 ********* ONE ********* <3 ********* -->
							<ul class="one">
								<li class="transition">
									<div class="wrapper"> <img class="transition" src="img/team/cmd.jpeg">
										<ul class="social">
											<li>Chief managing director <br>
											Mr. Pinku Kumar</li>

										</ul>
										<span class="transition">
											<h2>Mr. Pinku Kumar <em>C.M.D</em></h2>
											<i class="hhide">more</i>
										</span>
									</div>
								</li>
								<li class="transition">
									<div class="wrapper"> <img class="transition" src="img/team/hr.jpeg">
										<ul class="social">
											<li> Senior-HR <br>
												Mrs. Madhu Kumari</li>
										</ul>

										<span class="transition">
											<h2>Mrs. Madhu Kumari <em>Senior-HR</em></h2>
											<i class="hhide">more</i>
										</span>
									</div>
								</li>
								<li class="transition">
									<div class="wrapper"> <img class="transition" src="img/team/pm.jpeg">
										<ul class="social">
											<li> Project Manager <br>
											Mr. Manjeet Shambhu</li>
										</ul>
										<span class="transition">
											<h2>Mr. Manjeet Shambhu<em>Project Manager</em></h2>
											<i class="hhide">more</i>
										</span>
									</div>
								</li>



							</ul>
						</div>
					</div>
					<br>
					<!-- .row-->
				</div>
				<!-- .container-->

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