 <div class="offcanvas-menu offcanvas-effect visible-xs">
 	<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
 	<div>
 		<div>
 			<ul id="menu">
 				<li><a href="index.php">Home</a></li>
 				<li class="dropdown"><a href="#">Services</a>
 					<ul class="dropdown-menu">
 						<?php
							$navsql = "SELECT * FROM job where status='active' ORDER BY id DESC";
							$navresult = $conn->query($navsql);
							if ($navresult->num_rows > 0) {
								while ($navrow = $navresult->fetch_assoc()) {
									echo '<li style="word-wrap: break-word;"><a href="service_details.php?id=' . $navrow["id"] . '">' . $navrow['title'] . '</a></li>';
								}
							}
							?>
 					</ul>
 				</li>
 				<li><a href="team.php">Our Team</a></li>
 				<li><a href="gallery.php">Gallery</a></li>
 				<!-- <li><a href="support.php">Support</a></li> -->
 				<li><a href="about.php">About us</a></li>
 				<li><a href="contact.php">Contact Us</a></li>
 			</ul>
 		</div>
 	</div>
 </div>