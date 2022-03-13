<?php
include 'db.php';
$id = $_GET["id"];
if (empty($_GET['id'])) {
	header("Location: index.php");
	exit();
}

// include 'Razorpay/razorpay/razorpay/src/Api.php';
// //$autoloader = require 'Razorpay/razorpay/razorpay/src/Api.php';

// $api_key = 'rzp_live_qfZTHJ6CFHUMc0';
// $api_secret = 'cARdzwfzCCcb91RVVOccA0sc';

// $api = new Api($api_key, $api_secret);

// $order  = $client->order->create([
//       'receipt'         => 'order_rcptid_123',
//       'amount'          => 100, // amount in the smallest currency unit
//       'currency'        => 'INR',// <a href="/docs/payment-gateway/payments/international-payments/#supported-currencies" target="_blank">See the list of supported currencies</a>.)
//     ]);

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
	<title>Sashaktvihar - Registration</title>
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
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<style>
		.razorpay-payment-button {
			margin: auto;
			display: block;
			width: 120px;
			height: 40px;
			background-color: #3C4461;
			border: none;
			color: white;
			font-size: 17px;
			font-weight: 800;
			border-radius: 5px;
			margin-top: 50px;
		}
	</style>
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
									<h2>Registration</h2>
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
						<div class="registermain">
							<div class="regformhead">
								<h2 align="center"><strong>SASHAKT VIHAR CONSTRUCTION & SECURITY PRIVATE LIMITED</strong></h2>
								<h4 align="center">(Power Maintenance Service)</h4>
								<br>
							</div>
							<div class="regform">
								<form method="post" id="jobregform" onsubmit="return uplodeimgcheck()" enctype="multipart/form-data" action="submission.php">
									<div class="fromrightside">
										<div class="regformimg">
											<img id="blah" src="img/image_not_found_thumb.gif" alt="your image" width="100%" height="238px" />
										</div>
										<center>
											<label for="imageUpload" class="imgupbtn">Upload Image</label>
											<input type="file" id="imageUpload" accept="image/*" style="display: none" name="imag" onchange="Filevalidation()" required>
											<p style="margin-top:-5px;">(max-size:- 80kb)</p>
										</center>
									</div>
									<div class="formleftside">
										<?php
										$sql = "SELECT * FROM job where id='$id'";
										mysqli_set_charset($conn, 'utf8');
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											// output data of each row
											while ($row = $result->fetch_assoc()) {
												echo '<label style="font-size:16px;">Post Name:- &nbsp;' . $row["title"] . '</label><br><br>
                                                                            <input type="text" name="postname" style="display: none;" value="' . $row["title"] . '">';
											}
										} else {
											// echo "Something went wrong";
										}
										$conn->close();
										?>
										<div class="formpi col-sm-8 col-md-8">
											<h4>Sub Post:- </h4>
										</div>
										<div class="formdivpi">
											<div class="row">
												<div class="col-sm-4 col-md-4">
													<input type="checkbox" id="rfname" name="subpost[]" value="Field Worker">
													<label>Field Worker </label>
												</div>
												<div class="col-sm-4 col-md-4">
													<input type="checkbox" id="rlname" name="subpost[]" value="Supervisor">
													<label>Supervisor</label>
												</div>
												<div class="col-sm-4 col-md-4">
													<input type="checkbox" id="rlname" name="subpost[]" value="Block Contractor">
													<label>Block Contractor</label>
												</div>
												<div class="col-sm-4 col-md-4">
													<input type="checkbox" id="rlname" name="subpost[]" value="District Contractor">
													<label>District Contractor</label>
												</div>
											</div>
										</div>
										<div class="formpi col-sm-12 mblfat">
											<h4>Personal Information:- </h4>
										</div>
										<div class="formdivpi">
											<div class="row">
												<div class="col-sm-3">
													<label>First Name: </label><br>
													<input type="text" id="rfname" name="firstname" required>
												</div>
												<div class="col-sm-3">
													<label>Last Name:</label><br>
													<input type="text" id="rlname" name="lastname" required>
												</div>
												<div class="col-sm-3">
													<label>Father's Name: </label><br>
													<input type="text" name="fathername" required>
												</div>
												<div class="col-sm-3">
													<label>Mother's Name: </label><br>
													<input type="text" name="mothername" required>
												</div>
											</div><br><br>

											<div class="row">
												<div class="col-sm-4">
													<label>Sex: </label><br>
													<input type="radio" name="gender" value="Male" required checked>&nbsp;&nbsp;Male&nbsp;&nbsp;
													<input type="radio" name="gender" value="Female" required>&nbsp;&nbsp;Female<br><br>
												</div>

												<div class="col-sm-4">
													<label>Date of Birth: </label><br>
													<input type="date" name="dob" required>
												</div>

												<div class="col-sm-4">
													<label>Pan No: </label><br>
													<input type="text" minlength="10" maxlength="12" name="pannum" required>
												</div>
											</div><br>


											<div class="row">
												<div class="col-sm-4">
													<label>Aadhaar No: </label><br>
													<input type="text" pattern="[0-9]{12}" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==12 && event.keyCode!=8) return false;" title="Please enter a valid aadhar number" name="aadhaarno" required>
												</div>

												<div class="col-sm-3">
													<label>Mobile No:</label><br>
													<input type="text" id="rphone" pattern="[6-9]{1}[0-9]{9}" name="mobno" title="Please enter a valid phone number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;" required>
												</div>

												<div class="col-sm-5">
													<label>Email id: </label><br>
													<input type="email" id="remail" name="email" required>
												</div>
											</div>

										</div><br><br><br>

										<div class="formpi col-sm-12">
											<h4>Permanent Address:- </h4>
										</div>
										<div class="formdivpi">
											<div class="row">
												<div class="col-sm-3">
													<label>Village: </label><br>
													<input type="text" name="vill" required><br><br>
												</div>

												<div class="col-sm-3">
													<label>Post:</label><br>
													<input type="text" name="post" required><br><br>
												</div>

												<div class="col-sm-3">
													<label>Ps: </label><br>
													<input type="text" name="ps" required><br><br>
												</div>

												<div class="col-sm-3">
													<label>Block:</label><br>
													<input type="text" name="block" required><br><br>
												</div>
											</div><br>

											<div class="row">
												<div class="col-sm-4">
													<label>Dist: </label><br>
													<input type="text" name="dist" required><br><br>
												</div>

												<div class="col-sm-4">
													<label>State: </label><br>
													<input type="text" name="state" required><br><br>
												</div>

												<div class="col-sm-4">
													<label>Pincode: </label><br>
													<input type="text" pattern="[0-9]{6}" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==6 && event.keyCode!=8) return false;" title="Please enter a valid pincode" name="pincode" required><br><br>
												</div>
											</div>
										</div><br><br><br>

										<div class="formpi col-sm-12">
											<h4>Educational Qualification:- </h4>
										</div>
										<div class="formdivpi">
											<div class="row">
												<div class="col-sm-2">
													<input type="radio" name="eduq" value="Matric" required checked>&nbsp;Matric
												</div>
												<div class="col-sm-2">
													<input type="radio" name="eduq" value="Intermediate" required>&nbsp;Intermediate
												</div>
												<div class="col-sm-2">
													<input type="radio" name="eduq" value="Graduation" required>&nbsp;Graduation
												</div>
												<div class="col-sm-3">
													<input type="radio" name="eduq" value="ITI/Other Electrician degree" required>&nbsp;ITI/Other Electrician degree
												</div>
											</div><br><br>

											<div class="row">
												<div class="col-sm-4">
													<label>Category (ex:- obc,sc,st etc)</label>
													<input type="text" name="category" required><br><br>
												</div>

												<div class="col-sm-4">
													<label>Religion (ex:- hindu,muslim etc)</label>
													<input type="text" name="religion" required><br><br>
												</div>
											</div><br>

											<div class="row">
												<div class="col-sm-4">
													<label>Bank Name:</label>
													<input type="text" name="bankname" required><br><br>
												</div>

												<div class="col-sm-4">
													<label>Account No:</label>
													<input type="number" name="accountno" required><br><br>
												</div>

												<div class="col-sm-4">
													<label>IFSC Code: </label>
													<input type="text" name="ifsc" required>
												</div>
											</div><br>

											<div class="row">
												<div class="col-sm-4">
													<label>Account Holder Name: </label>
													<input type="text" name="accounthname" id="accounthname" required>
												</div>
											</div><br><br>


											<div class="formpi col-sm-12">
												<h4>Registration Fee details:- </h4>
											</div><br><br>
											<ul>
												<li><b>&#9679; Registration Fee is applicable for every post is Rs 500/-</b></li>
												<li><b>&#9679; Every candidate have to pay registration fee for applying the job.</b></li>
											</ul>


										</div>

									</div>
									<!-- <script id="pay" src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_live_qfZTHJ6CFHUMc0" data-amount="10000" data-currency="INR" data-buttontext="SUBMIT" data-name="Apbiharpower" data-description="Power Maintenance Services" data-image="img/logo1.png" data-theme.color="#00ACC0">

									</script> -->
									<input type="hidden" name="regsucess">
									<input type="hidden" custom="Hidden Element" name="hidden">
									<br><br>
									<center>
										<input type="submit" name="regsucess" id="rzp-butto" class="submbtn"></input>
									</center>
								</form>

							</div>

						</div>

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
	<script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#blah').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#imageUpload").change(function() {
			readURL(this);
		});
	</script>

	<script>
		Filevalidation = () => {
			const fi = document.getElementById('imageUpload');
			if (fi.files.length > 0) {
				for (const i = 0; i <= fi.files.length - 1; i++) {
					const fsize = fi.files.item(i).size;
					const file = Math.round((fsize / 1024));
					// The size of the file. 
					if (file > 80) {
						alert("File is big, please select a file less than 80kb");
						$('#blah').attr('src', 'img/image_not_found_thumb.gif');
						$("#imageUpload").val(null);
					}
				}
			}
		}
	</script>

	<script>
		function uplodeimgcheck() {
			if ($('#imageUpload').get(0).files.length === 0 && $('#imageUpload').val != '') {
				alert("Please Upload Image");
				return false;
			}
		}
	</script>

	<script>
		$(".razorpay-payment-").click(function() {

			uplodeimgcheck();
			var fame = $('#rfname').val();
			var lame = $('#rlname').val();
			var name = fname + ' ' + lname;
			var email = $('#remail').val();
			var phone = $('#rphone').val();
			$('#pay').attr('data-prefill.name', name);
			$('#pay').attr('data-prefill.email', email);
			$('#pay').attr('data-prefill.contact', phone);

		});
	</script>
</body>

</html>