<?php
session_start();

?>
<!DOCTYPE html>
<html Lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width,initial-scale=1.0">
		
		<!--Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!--Font Awesome Css -->
		<link rel="stylesheet" href="css/all.min.css">
        
		<!--Google Font -->
		<!--<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
        -->
		 <!--Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		

		<!--For Testimonial
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">-->

		<title>BusService System </title>
    </head>
	<body>
        <!-- Start Navigation-->
		<nav class="navbar navbar-expand-sm navbar-dark fixed-top pl-5" style="background-color: #225470; opacity: 0.8;"  >	  
            <a class="navbar-brand" href="index.php" s>BusService</a>
			    <span class="navbar-text">Easy and Quick </span>
              
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <ul class="navbar-nav custom-nav" style="padding-left: 5px;">
				    <li class="nav-item custom-nav-item">
						<a href="#" class="nav-link">Home</a></li>
				    <li class="nav-item custom-nav-item">
					    <a href="#map" class="nav-link">Map</a></li>
				    <li class="nav-item custom-nav-item">
					    <a href="signup.php" class="nav-link"data-bs-toggle="modal" 
			         		data-bs-target="#registrationform">Sign Up</a></li>  
				    <li class="nav-item custom-nav-item">
					    <a href="#" class="nav-link" data-bs-toggle="modal" 
			         	data-bs-target="#loginform">Login</a></li>
					<li class="nav-item custom-nav-item">
					    <a href="#gallery" class="nav-link">Gallery</a></li>
				    <li class="nav-item custom-nav-item">
					    <a href="#feedback" class="nav-link" >Feedback</a></li>
				    <li class="nav-item custom-nav-item">
					    <a href="#contact-me" class="nav-link">Contact</a></li>
				   
			    </ul>
            </div>
        </nav>
		

		<!-- End Navigation -->