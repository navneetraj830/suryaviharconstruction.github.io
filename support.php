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
	<html lang="en" class="no-js"> <!--<![endif]-->
	<!-- =========================================
	head
	========================================== -->

	<head>
	    
	    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151393624-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-151393624-1');
        </script>
        
	    <!-- =========================================
	    Basic
	    ========================================== -->
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    <title>Anjali & Poonam Power Services Pvt. Ltd - Support</title>
	    <meta name="keywords" content="Anjali & Poonam Power Services Pvt. Ltd"/>
	    <meta name="author" content="Anjali & Poonam Power Services Pvt. Ltd"/>
	    <meta name="description" content="Anjali & Poonam Power Services Pvt. Ltd"/>

	    <!-- =========================================
	    Mobile Configurations
	    ========================================== -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
	    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	    <meta name="apple-mobile-web-app-capable" content="yes"/>


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
										<h2>Support</h2>
										<ul class="breadcrumb">
										   <li><a href="index.php">Home</a></li>
										   <li class="active">Support</li>
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
								<h1>District Level Support</h1>
								</center>
								
								<?php
										
                					$sql = "SELECT * FROM support ORDER BY id DESC";
                                    $result = $conn->query($sql);
                                                            
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) 
                                        {
                                            
                                            echo '<div class="supportlistmain">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <h3 class="supdistnm">Dist.:- '.$row["dist"].'</h3>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-3 text-center">
                                                            <img class="supportlistimg" src="'.$row["image"].'" alt="sashaktvihar.com"><br>
                                                            <h4>'.$row["name"].'</h4>
                                                        </div>
                                                                
                                                        <div class="col-md-4">
                                                            <h4>Office: </h4>
                                                            <p>'.$row["address"].'</p>
                                                            <br>
                                                            <h4>Contact: </h4>
                                                            <a href="tel:+91'.$row["contact_no"].'">+91 '.$row["contact_no"].'</a><br>
                                                            <p>Calling time:- '.$row["calling_time"].'<p/>
                                                        </div>
                                                        <div class="col-md-5">
                                                            '.$row["map"].'
                                                        </div>
                                                    </div>
                                                </div>';
                                            }
                                        } 
                                                            
                                ?>
                                                        
								<br>
								<!--<div class="supportlistmain">-->
        <!--                            <div class="row">-->
        <!--                                <div class="col-md-3">-->
        <!--                                    <h3 class="supdistnm">Dist.:- Patna</h3>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                            <br>-->
        <!--                            <div class="row">-->
        <!--                                <div class="col-md-3 text-center">-->
        <!--                                    <img class="supportlistimg" src="img/team/support/patna.jpg" alt="sashaktvihar.com"><br>-->
        <!--                                    <h4>Kajal Rajput</h4>-->
        <!--                                </div>-->
                                                
        <!--                                <div class="col-md-4">-->
        <!--                                    <h4>Office: </h4>-->
        <!--                                    <p>GD women's college , pillar number 92 , wedding hall ke samne , Pin Code-800002 </p>-->
        <!--                                    <br>-->
        <!--                                    <h4>Contact: </h4>-->
        <!--                                    <a href="tel:+917033630421">+91 7033630421</a><br>-->
        <!--                                    <p>Calling time:- 9am to 6pm<p/>-->
        <!--                                </div>-->
        <!--                                <div class="col-md-5">-->
        <!--                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115132.86107235146!2d85.07300191831742!3d25.608175570492524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1584817262831!5m2!1sen!2sin" width="100%" height="220" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
                                                         
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
                                        
                                        
		
                                        
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