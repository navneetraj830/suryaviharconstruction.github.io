<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
	header("Location: http://sashaktvihar.com");
	exit();
}

include 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/vendor/autoload.php';

if (isset($_POST['regsucess'])) {
	$subpostarray = array();
	if (isset($_POST['subpost'])) {
		foreach ($_POST['subpost'] as $spost){
			$subpostarray[] = $spost;
		}
	}
	$subpost = implode(", ",$subpostarray);
	$postname = $_POST["postname"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$name = $firstname . '' . $lastname;
	$fathername = $_POST["fathername"];
	$mothername = $_POST["mothername"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$pannum = $_POST["pannum"];
	$aadhaarno = $_POST["aadhaarno"];
	$mobno = $_POST["mobno"];
	$email = $_POST["email"];
	$vill = $_POST["vill"];
	$post = $_POST["post"];
	$ps = $_POST["ps"];
	$block = $_POST["block"];
	$dist = $_POST["dist"];
	$state = $_POST["state"];
	$pincode = $_POST["pincode"];
	$eduq = $_POST["eduq"];
	$category = $_POST["category"];
	$religion = $_POST["religion"];
	$bankname = $_POST["bankname"];
	$accountno = $_POST["accountno"];
	$ifsc = $_POST["ifsc"];
	$accounthname = $_POST["accounthname"];
	$img = addslashes(file_get_contents($_FILES['imag']['tmp_name']));

	$concat_data = "SV" . date("Ymd");
	date_default_timezone_set("Asia/Calcutta");
	$date = date("Y-m-d h:i:s a");

	$token = uniqid(date("Ymdhis"));
	$sql = "INSERT INTO registration(registration_id, postname, subpost, firstname, lastname, fathername, mothername, gender, dob, pannum, aadhaarno, mobno, email, vill, post, ps, block, dist, state, pincode, eduq, category, religion, bankname, accountno, ifsc, accounthname, img, concat_data, date, token_id, notify)
         VALUES ('', '$postname', '$subpost', '$firstname', '$lastname', '$fathername', '$mothername', '$gender', '$dob', '$pannum', '$aadhaarno', '$mobno', '$email', '$vill', '$post', '$ps', '$block', '$dist', '$state', '$pincode', '$eduq', '$category', '$religion', '$bankname', '$accountno', '$ifsc', '$accounthname', '$img', '$concat_data', '$date', '$token','unread')";

	$sqll = "UPDATE registration SET registration_id = concat( concat_data, id ) where token_id = '$token'";
	if (mysqli_query($conn, $sql)) {
		if (mysqli_query($conn, $sqll)) {
			header("Location: submission.php?status=success&token=$token");
		} else {
			header("Location: submission.php?status=failed");
			// echo mysqli_error($conn);
		}
	} else {
		header("Location: submission.php?status=failed");
		//echo mysqli_error($conn);
	}
	mysqli_close($conn);
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
	<title>Sashaktvihar.com - Form Submission</title>
	<meta name="keywords" content="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd." />
	<meta name="author" content="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd." />
	<meta name="description" content="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd." />

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
									<h2>Form Submission</h2>
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
						<?php
						error_reporting(E_ALL ^ E_NOTICE);
						$token = $_GET['token'];
						if ($_GET['status'] == "success") {
							echo '<div class="formsubmain">
									<div class="formsubdesc">
                                        <center>
                                            <img src="img/payment-success.png" width="100px" height="100px" alt="sashaktvihar">
                                            <br><br>
                                            <h3>Registration Completed Successfully</h3>
                                            <p>Please check your email for download submission form</p>
                                        </center>
                                    </div>
                                    <div class="acceptterm">
                                        <center>
                                            <a href="pdf.php?token=' . $token . '" target="_blank"><button><i class="fa fa-download" aria-hidden="true"></i> Download</button></a>
                                        </center>
                                    </div>
                                </div>';

							$token = $_GET['token'];
							$regid = "SELECT * FROM registration where token_id = '$token'";
							$result = $conn->query($regid);
							while ($row = $result->fetch_assoc()) {
								$registration_id = $row["registration_id"];
								$date = $row["date"];
								$img = $row["img"];
								$postname = $row["postname"];
								$subpost = $row["subpost"];
								$firstname = $row["firstname"];
								$lastname = $row["lastname"];

								$name = $firstname . '' . $lastname;

								$fathername = $row["fathername"];
								$mothername = $row["mothername"];
								$sex = $row["gender"];
								$dob = $row["dob"];
								$panno = $row["pannum"];
								$aadhaarno = $row["aadhaarno"];
								$mobno = $row["mobno"];
								$email = $row["email"];
								$vill = $row["vill"];
								$post = $row["post"];
								$ps = $row["ps"];
								$block = $row["block"];
								$dist = $row["dist"];
								$state = $row["state"];
								$pincode = $row["pincode"];
								$eduq = $row["eduq"];
								$category = $row["category"];
								$religion = $row["religion"];
								$bankname = $row["bankname"];
								$accountno = $row["accountno"];
								$ifsc = $row["ifsc"];
								$accountname = $row["accounthname"];
							}

							$html = '<div class="regformhead">
                                        <h2 align="center"><strong>SASHAKT VIHAR CONSTRUCTION & SECURITY PRIVATE LIMITED</strong></h2>
                                        <h4 align="center">(Power Maintenance Service)</h4>
                                        <br><hr>
                                    </div>
                                    <div class="regform">
                                        <div class="sect">
                                            <div class="fromrightside">
                                                <div class="regformimg">
													<center>
														<img id="blah" style="width:100%;height:180px;" src="data:image/jpeg;base64,' . base64_encode($img) . '"/>
													</center>
                                            	</div>
                                            </div>
                                            <div class="formleftside">
                                            	<br>
                                                <h4 style="margin-bottom:-8px;margin-left:10px;">Registration No.:- &nbsp;' . $registration_id . '</h4>
                                                <p style="margin-left:10px;">Date:-&nbsp;' . $date . '</p>
                                                <p style="margin-left:10px;">Post Name:- &nbsp;' . $postname . '</p>
												<p style="margin-left:10px;">Sub Post:- &nbsp;' . $subpost . '</p>
                                            </div>
                                        </div>
                                        <div class="fful">
                                            <h4>Persional Information:- </h4>
                                            <div class="formdivpi">
                                                 <table style="width: 100%;">
                                                    <tbody>
                                                    	<tr>
                                                            <td style="width: 30%;">Name:- ' . $firstname . ' ' . $lastname . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%;">Fathers Name:- ' . $fathername . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%;">Mothers Name:- ' . $mothername . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%;">Gender:- ' . $sex . '</td>
                                                        	<td style="width: 30%;">Date of Birth:- ' . $dob . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%;">Aadhaar No.:- ' . $aadhaarno . '</td>
                                                            <td style="width: 30%;">Pan No.:- ' . $panno . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%;">Email id:- ' . $email . '</td>
                                                            <td style="width: 30%;">Mobile No.:- ' . $mobno . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h4>Permanent Address:- </h4>
                                            <div class="formdivpi">
                                                <table style="width: 100%;">
                                                    <tbody>
                                                    	<tr>
                                                            <td style="width: 30%;">Village:- ' . $vill . '</td>
                                                            <td style="width: 30%;">Post:- ' . $post . '</td>
                                                            <td style="width: 30%;">Ps.:- ' . $ps . '</td>
                                                        </tr>
                                                        <tr>
                                                    		<td style="width: 30%;">Block:- ' . $block . '</td>
                                                            <td style="width: 30%;">Dist.:- ' . $dist . '</td>
                                                            <td style="width: 30%;">State.:- ' . $state . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%;">Pincode.:- ' . $pincode . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h4>Educational Qualification:- </h4>
                                            <div class="formdivpi">
                                                <table style="width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 30%;">Edu. Qualification:- ' . $eduq . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 50%;">Category:- ' . $category . '</td>
                                                        	<td style="width: 50%;">Religion.:- ' . $religion . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h4>Bank Details:- </h4>
                                            <div class="formdivpi">
                                                <table style="width: 100%;">
                                                	<tbody>
                                                        <tr>
                                                            <td style="width: 30%;">Bank Name:- ' . $bankname . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 50%;">Account No.:- ' . $accountno . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%;">IFSC Code:- ' . $ifsc . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%;">Account Holder Name:- ' . $accountname . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
							include('mpdf/mpdf.php');
							$mpdf = new Mpdf();
							$stylesheet = file_get_contents('css/pdf.css'); // external css
							$mpdf->WriteHTML($stylesheet, 1);
							$mpdf->WriteHTML($html, 2);
							$mpdf->setFooter('www.sashaktvihar.com');
							$mpdf->SetWatermarkImage('img/logopdf.jpg');
							$mpdf->showWatermarkImage = true;
							$pdf = $mpdf->Output('', "S");
							$mail = new PHPMailer;
							try {
								$mail->SMTPDebug = 0;                      // Enable verbose debug output
								$mail->isSMTP();                                            // Send using SMTP
								$mail->Host       = 'mail.sashaktvihar.com';                    // Set the SMTP server to send through
								$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
								$mail->Username   = 'info@sashaktvihar.com';                     // SMTP username
								$mail->Password   = 'Sashaktvihar@123';                               // SMTP password
								$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
								$mail->Port       = 587;                                    // TCP port to connect to

								//Recipients
								$mail->setFrom('info@sashaktvihar.com', 'Sashakt Vihar');
								$mail->addAddress($email, $name);     // Add a recipient
								$mail->addReplyTo('info@sashaktvihar.com', 'Sashakt Vihar');

								// Content
								$mail->isHTML(true);                                  // Set email format to HTML
								$mail->Subject = 'Registration details';
								$mail->Body    = 'Hello <b>' . $name . '</b>,<br><br>&nbsp;We have received your registration information we will reach out to you shortly with the final details. Thanks again for registering and welcome to sashaktvihar.com';
								$mail->addStringAttachment($pdf, $registration_id . '.pdf');
								$mail->send();

								$mail->ClearAddresses();
								$mail->ClearReplyTos();
								$mail->addReplyTo($email, $name);
								$mail->addAddress('info@sashaktvihar.com', 'Sashakt Vihar');
								$mail->Subject = 'New Registration';
								$mail->Body    = 'New registration please check attachement';
								$mail->addStringAttachment($pdf, $registration_id . '.pdf');
								$mail->send();

								// echo 'Message has been sent';
							} catch (Exception $e) {
								echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
							}
						} else if ($_GET['status'] == "failed") {
							echo '<div class="formsubmain">
									<div class="formsubdesc">
                                    	<center>
                                    		<img src="img/Oops-Something-went-wrong.png" alt="sashaktvihar">
                                    	</center>
                                    </div>
									<div class="acceptterm">
										<a href="https://sashaktvihar.com/"><button>Go to Home</button></a>
									</div>
                                </div>';
						} else {
						}
						?>
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