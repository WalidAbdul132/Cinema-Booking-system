<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Silverbird Cinemas</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    
<!--    flickety-->
    <link rel="stylesheet" href="css/flickety.css"> 

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo-copy.png" alt="" height="80px"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="pricepromos.php">Prices and Promos</a></li>
						<li class="nav-item"><a class="nav-link" href="movies.php">Movies</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item active"><a class="nav-link" href="booking.php">Online Booking</a></li> 
						<li class="nav-item"><a class="nav-link" href="ticket.php">Tickets</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb" style="background: url(images/bg2.jpg) no-repeat; background-size: cover;">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Booking</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->    
	<!-- Start Contact -->

    

    	<!-- Start Contact -->
    
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2 style="margin-top: 10px;">BUY A TICKET</h2>
						<p style="margin-bottom: -20px;">Pick a movie</p>
					</div>
				</div>
			</div>
            <div class="row">
				<div class="col-lg-10">
                    <form class="form_t" name="applicationform" action="booking_w.php" method="post">
                        <div class="row">
                            <div class="col-md-4">
                            </div>
							<div class="col-md-4">
                                <label for="movie">location:</label>
                                    <select id="location" name="location" class="movie_op">
                                    <option value="galleria">Galleria</option>
                                    <option value="ikeja">Ikeja</option>
                                    <option value="sec">SEC, Abuja</option>
                                    <option value="jabi">Jabi Lake Mall, Abuja</option>
                                    </select>
                                
                                
                                    <label for="movie">Choose a movie:</label>
                                    <select id="movie" name="movie" class="movie_op">
                                    <option value="WONDER WOMAN 1984">WONDER WOMAN 1984</option>
                                    <option value="QUAM’S MONEY">COMING TO AMERICA</option>
                                    <option value="SOUL">SOUL</option>
									<option value="TOM AND JERRY">TOM AND JERRY</option>
									<option value="THE KINGSMAN">THE KINGSMAN</option>
									<option value="QUAM’S MONEY">QUAM'S MONEY</option>
                                    </select>
                                
                                
                                
                                
                                <label for="day">Choose a Day:</label>
                                    <select id="days" name="day" class="movie_op">
                                    <option value="monday">Monday</option>
                                    <option value="tuesday">Tuesday</option>
                                    <option value="wednesday">Wednesday</option>
                                    <option value="thursday">Thursday</option>
                                    <option value="friday">Friday</option>
                                    <option value="saturday">Saturday</option>
                                    <option value="sunday">Sunday</option>
                                    </select>
                                
                                <label for="day">Choose a Time:</label>
                                    <select id="days" name="time" class="movie_op">
                                    <option value="10:00:00">10:00</option>
                                    <option value="12:00:00">12:00</option>
                                    <option value="2:30:00">2:30</option>
                                    <option value="4:30:00">4:30</option>
                                    </select>
                                
                                <label for="movie">Tickets:</label>
	                               <input type="number" name="ticket" value="0" max="10" min="1"/>
	                               
                                 <input type="submit" id="input-button" name="submit" value="submit">
                                </div>
                               
                            </div>
                         <div class="col-md-4">
                            </div>
                    </form>
				</div>
			</div>
            </div>
    </div>
    
    
    <script src="dist/style.js"></script>      
    <script src="dist/card.js"></script>
     <script src="dist/jquery.card.js"></script>
    <!-- Flickity HTML init -->
<div class="gallery js-flickity"
  data-flickity-options='{ "wrapAround": true }'>
  <div class="gallery-cell"><img src="images/movies/slides/banner5.jpg"></div>
  <div class="gallery-cell"><img src="images/movies/slides/banner2.jpg"></div>
  <div class="gallery-cell"><img src="images/movies/slides/banner4.jpg"></div>
  <div class="gallery-cell"><img src="images/movies/slides/banner3.jpg"></div>
  <div class="gallery-cell"><img src="images/movies/slides/banner1.jpg"></div>
</div>
	<!-- End -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="overflow-hidden">
						<h4><img src="images/logo-copy.png"></h4>
                        <h4>Vouchers</h4>
						<a href="#"><p class="lead">
							Silverbird Loyalty Program
						</p></a>
                        <a href="#"><p class="lead">
							Gift cards and Vouchers
						</p></a>
                        <a href="#"><p class="lead">
							School Excursions
						</p></a>
                        

					</div>
				</div>
				<div class="col-md-3">
					<div class="overflow-hidden">
						<h4>Contact Us</h4>
						<p class="lead">
                            <i class="fa fa-phone"></i>+234 814 952 6496
						</p>
                        <p class="lead">
                            <i class="fa fa-envelope"></i>Foodradar@gmail.com
						</p>
                        <hr>
                        
                        <h4>Connect With Us</h4>
                        <div class="connect">
                            <a><i class="fa fa-instagram" style="color: crimson"></i></a>
                            <a><i class="fa fa-facebook" style="color: blue"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                            <a><i class="fa fa-google-plus" style="color: red"></i></a>
                        </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="overflow-hidden">
						<h4>Our Business</h4>
						<a href="#"><p class="lead">
							SilverbirdTV
						</p></a>
                        <a href="#"><p class="lead">
							Rhythm FM
						</p></a>
                        <a href="#"><p class="lead">
							MBGN
						</p></a>
                        <a href="#"><p class="lead">
							Silverbird Group
						</p></a>
                        <a href="#"><p class="lead">
							Film Distribution
						</p></a>
					</div>
				</div>
                <div class="col-md-3">
<!--					<i class="fa fa-map-marker"></i>-->
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Aptech World Wide Kano Centre
                            No. 68 Maganda Road Off Murtala Moh'd Way, Kano Municipal, Kano, Kano
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">Silverbird Cinemas</a> ::Design By : 
					<a href="https://html.design/">Abdullahi Abubakar</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/flickety.js"></script>
	
</body>
</html>