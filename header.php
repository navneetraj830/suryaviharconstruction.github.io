<header class="header-wrapper">
    <div class="header-top">
        <div class="col-md-9 col-xs-12 col-sm-9">
            <div class="logo">
                <a title="sashaktvihar" href="index.php">

                    <img class="mainlogo" src="img/logo1.jpg" width="60%" alt="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd.">
                    <img class="swachhbharat" src="img/swachhbharat.png" style="display: inline-block;float:right;" width="20%"
                        alt="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd.">
                    <img class="makeinindia" src="img/makeinindia.png" style="display: inline-block;" width="18%"
                        alt="Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd.">
                    <!--<h3> Sashakt Vihar, Sashakt Vihar Construction & Security Pvy. Ltd.</h3>-->
                </a>
            </div>
        </div>
        <div class="col-md-3 hidden-xs col-sm-3">
            <div class="header-connection">
                <ul class="header-social social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <p>Call Us: <a href="tel:+91 9470868348"><strong>+91 9470868348</strong></a> / <a
                        href="tel:+91 9430403671"><strong>9430403671</strong></a>
            </div>
        </div>
    </div>
    <!-- .header-top-->
    <div class="main-nav-bar">
        <div class="col-md-12">
            <div class="navbar-header navbar-right pull-left">
                <!-- offcanvas-trigger-effects -->
                <div id="offcanvas-trigger-effects" class="offcanvas">
                    <button type="button" class="navbar-toggle visible-xs" data-toggle="offcanvas"
                        data-target=".navbar-collapse" data-placement="left" data-effect="offcanvas-effect">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- offcanvas-trigger-effects -->
            </div>

            <!-- navbar-collapse -->
            <nav role="navigation" class="collapse navbar-collapse navbar main-nav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <!-- <li><a href="services.php">Services</a></li> -->
                    <li class="dropdown"><a href="#">Services</a>
                        <ul class="dropdown-menu">
                            <?php
                            $navsql = "SELECT * FROM job where status='active' ORDER BY id DESC";
                            $navresult = $conn->query($navsql);
								if ($navresult->num_rows > 0) {
                                while ($navrow = $navresult->fetch_assoc()) {
									echo '<li style="word-wrap: break-word;"><a href="service_details.php?id='. $navrow["id"].'">'.$navrow['title'].'</a></li>';
								}
							}
                            ?>
                        </ul>
                    </li>
                    <li><a href="team.php">Our Team</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <!-- <li><a href="support.php">Support</a></li> -->
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <!-- /navbar-nav -->
            </nav>
            <!-- /navbar-collapse -->
        </div>
    </div>
    <!-- .main-nav-bar -->
</header>