	<?php
	include 'db.php';
	$id = $_GET["id"];
	if (empty($_GET['id'])) {
		header("Location: http://sashaktvihar.com");
		exit();
	}
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
		<title>Term & Conditions - sashaktvihar.com</title>
		<meta name="keywords" content="Anjali & Poonam Power Services Pvt. Ltd., Power Maintenance Service, sashaktvihar" />
		<meta name="author" content="Anjali & Poonam Power Services Pvt. Ltd." />
		<meta name="description" content="Anjali & Poonam Power Services Pvt. Ltd." />

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
										<h2><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp;&nbsp;Terms And Conditions</h2>
										<ul class="breadcrumb">

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
							<div class="termsmain">
								<h2 align="center">Terms and Conditions</h2>
								<hr class="hrtnc">
								<div class="teamdesc">
									<?php

									$sql = "SELECT * FROM job where id='$id'";
									mysqli_set_charset($conn, 'utf8');
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										// output data of each row
										while ($row = $result->fetch_assoc()) {
											echo $row["short_desc"];
										}
									} else {
										echo "Something went wrong";
									}
									$conn->close();
									?>

								</div>
								<div class="acceptterm">
									<form action="registration.php?id=<?php echo $id; ?>" method="POST">
										<input type="checkbox" required>&nbsp;&nbsp;I have read and accept the Terms & Conditions
										<br><br>
										<button>Proceed</button>
									</form>
								</div>

							</div>
							<br><br>
						</div>
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