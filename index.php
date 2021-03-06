<html>
<head>
	<title>
	<?php 
		echo "ProSports | Home";
		if (isset($_GET['page'])) {
			echo $_GET['page'];
		}
	?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/stylenew.css">
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
</head>
<body>
	<div class="wrapper translucent">
		<div class="back-top">
			<img src="images/a.png" class="back-top-img">
		</div>
		<div class="inner-wrapper opaque">
			<div class="header-container">
				<div class="upper-header">
					<a href="#" class="page-title">ProSports | India</a>
					<div class="social-container">
						<div class="social-icon first">
							<img height="40" width="40" src="images/a.png">
						</div>
						<div class="social-icon invisible" id="facebook">
							<a href="#facebook"><img src="images/default/facebook.png"></a>
						</div>
						<div class="social-icon invisible" id="twitter">
							<a href="#twitter"><img src="images/default/twitter.png"></a>
						</div>
						<div class="social-icon invisible" id="google">
							<a href="#google"><img src="images/default/googleplus.png"></a>
						</div>
					</div>
				</div>
				<div class="lower-header">
					<div class="menubar-container">
						<div class="menu-item" id="home">
							<a href="#">Home</a>
						</div>
						<div class="menu-item" id="sports">
							<a href="#">Sports</a>
						</div>
						<div class="menu-item" id="about">
							<a href="#">About Us</a>
						</div>
						<div class="menu-item" id="contact">
							<a href="#">Contact Us</a>
						</div>
						<div class="menu-item last-menu-item" id="gallery">
							<a href="#">Gallery</a>
						</div>
					</div>
				</div>
			</div>
			<div class="main-content">
				<div class="slideshow-container">
					<div class="arch-slider">
						<div class="nav-buttons">
							<div class="prev">
								<img src="images/a.png" class="nav-images-prev">
							</div>
							<div class="next">
								<img src="images/a.png" class="nav-images-next">
							</div>
						</div>
						<div class="slide" id="slide1">
							<a href="#" class="image-a">
								<img src="images/image1_min.jpg">
							</a>
						</div>
						<div class="slide" id="slide2">
							<a href="#" class="image-a">
								<img src="images/image2_min.jpg">
							</a>
						</div>
						<div class="slide" id="slide3">
							<a href="#" class="image-a">
								<img src="images/image3_min.jpg">
							</a>
						</div>
						<div class="slide" id="slide4">
							<a href="#" class="image-a">
								<img src="images/image4.jpg">
							</a>
						</div>
						<!--<div class="progress-bar">

						</div> -->
					</div>
				</div>
				<div class="content-container">
					<div class="secondary-menu-container clearfix">
						<div class="sec-menu-item" id="archery">
							Archery
						</div>
						<div class="sec-menu-item" id="swimming">
							Swimming
						</div>
						<div class="sec-menu-item" id="boxing">
							Boxing
						</div>
						<div class="sec-menu-item" id="wrestling">
							Wrestling
						</div>
						<div class="sec-menu-item" id="trackfield">
							Track And Field
						</div>
						<div class="sec-menu-item" id="trackfield">
							Athletics
						</div>
						<div class="sec-menu-item" id="shooting">
							Shooting
						</div>
					</div>
					<div class="text-container">
						<h2>Home</h2>Welcome to Olympics India. <br/>This is a place where you can find out everything about
						Olympics. Register here to get a global recognition and world class training.
						You can also find tutors, exercise tips, learn about sports, watch videos and find the best athletes in the sport.
					</div>
					<div class="newsfeed-container">
						<h3>links</h3>
						<div class="tiny-divisions">
							<div class="forum-div tiny-division">
								forums
							</div>
							<div class="video-div tiny-division">
								Videos
							</div>
							<div class="tips-div tiny-division">
								Exercise Tips
							</div>
							<div class="locate-div tiny-division">
								Locate Clubs
							</div>
							<div class="records-div tiny-division">
								World Records
							</div>
							<div class="athlete-div tiny-division">
								Athletes
							</div>
							<div class="tutors-div tiny-division">
								Tutors
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-container">
				<div class="footer">
				</div>
			</div>
		</div>
	</div>
</body>
</html>