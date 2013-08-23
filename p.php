<?php
if($_GET['page']=='sports'){
	echo '<div class="left-text-container">
	<h1>Sports</h1>Welcome to Olympics India. This is a place where you can find out everything about
	Olympics. Register here to get a global recognition and world class training.
	</div>';
}
if ($_GET['page']=='about') {
	echo '<h1>About Us</h1>';
}
if ($_GET['page']=='contact') {
	echo '<h1>Contact Us</h1>We are Software Incubator! We believe in redifining limitations.
	You can reach us at Software Incubator, Ajay Kumar Garg Engineering College, Ghaziabad.';
}
if ($_GET['page']=='gallery') {
	echo '<h1>Gallery</h1>
	Happy Birthday, Archit!
	<br/>-Archit';
}
?>