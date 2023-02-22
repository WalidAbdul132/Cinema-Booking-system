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
						<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li> 
						<li class="nav-item"><a class="nav-link" href="booking.php">Online Booking</a></li>
						<li class="nav-item"><a class="nav-link" href="ticket.php">Tickets</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb" style="background: url(images/bg.jpg) no-repeat; background-size: cover;">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	<div class="mapp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.524482181855!2d8.544781313815518!3d12.00736999149351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11ae8115af5ea3b9%3A0xea7a0e3a148840c8!2sAptech%20World%20Wide%20Kano%20Centre!5e0!3m2!1sen!2sng!4v1602763512326!5m2!1sen!2sng" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
	<!-- Start Contact -->
	<div class="map-full"></div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact Us</h2>
						<p>Reach out to Us</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Send Message</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
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
                        <h4>VOUCHERS</h4>
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
						<h4>CONTACT US</h4>
						<p class="lead">
                            <i class="fa fa-phone"></i>+234 814 952 6496
						</p>
                        <p class="lead">
                            <i class="fa fa-envelope"></i>Foodradar@gmail.com
						</p>
                        <hr>
                        <div class="connect">
                        <h4>CONNECT WITH US</h4>
                            <a><i class="fa fa-instagram" style="color: crimson"></i></a>
                            <a><i class="fa fa-facebook" style="color: blue"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                            <a><i class="fa fa-google-plus" style="color: red"></i></a>
                        </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="overflow-hidden">
						<h4>OUR BUSINESS</h4>
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
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/flickety.js"></script>
</body>
</html>