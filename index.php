<?php session_start();
$_SESSION['errmsg']="";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Multi-Speciality Clinic</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {

			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<!--start-wrap-->

			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.html" style="font-size: 30px;">Multi-Speciality Clinic</a>
				</div>
                                <div align="right"><a href="search.php" target="_blank">Search for Signs and Symptoms</a></div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					      <li><img src="images/slider-image2.jpg" alt=""></li>
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">


				<div class="listview_1_of_3 images_1_of_3">
					<div class="text list_1_of_2">
						  <h3>Patients</h3>
						  <p>Register & Book Appointment</p>
						  <div class="button"><span><a href="hms/user-login.php">Click Here</a></span></div>
				    </div>
				</div>

				<div class="listview_1_of_3 images_1_of_3">
					<div class="text list_1_of_2">
						  <h3>Doctors Login</h3>
                                                    <p>&nbsp;</p>
						  <div class="button"><span><a href="hms/doctor/">Click Here</a></span></div>
					</div>
				</div>


					<div class="listview_1_of_3 images_1_of_3">
					<div class="text list_1_of_2">
						  <h3>Admin Login</h3>
                                                     <p>&nbsp;</p>
						  <div class="button"><span><a href="hms/admin">Click Here</a></span></div>
				     </div>
				</div>
			</div>
		    </div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		  
		   </div>
		   </div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>