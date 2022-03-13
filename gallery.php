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
	<title>Sashakt Vihar Construction & Security Pvt. Ltd. - Gallery</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
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
									<h2>Gallery</h2>
									<ul class="breadcrumb">
										<li><a href="index.php">Home</a></li>
										<li class="active">Gallery</li>
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
						<div class="col-12">
							<center>
								<br><br><br>
								<h1>Gallery</h1><br>
							</center>
						</div>
						<div class="row photos">
							<center>
								<div class="col-12 item">
									<?php
									$slidersql = "SELECT * FROM gallery ORDER BY id DESC";
									$slideresult = $conn->query($slidersql);

									if ($slideresult->num_rows > 0) {
										// output data of each row
										while ($row = $slideresult->fetch_assoc()) {

											echo '<a href="img/gallery/' . $row["link"] . '"data-lightbox="photos"><img class="img-fluid galimg" src="img/gallery/' . $row["link"] . '" style="margin:10px;border:1px solid #ccc;padding:5px;" alt="sashaktvihar.com"/></a>';
										}
									} else {
									}
									?>
								</div>
							</center>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>