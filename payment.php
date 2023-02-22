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


<!--   card-->
         <link rel="stylesheet" href="card/card.css">
<!-- card-->
<style>
    #exp-container input[type='number']{
        width: 80px;
    }
</style>
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
					<h1>booking</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->    
	<!-- Start Contact -->
    
<!--test -->
    
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
                    <form class="form_t" name="applicationform">
                        <div class="row">
                            <div class="col-md-4">
                            </div>
							<div class="col-md-4">
                                    <table class="table_t">
        <tr>
            <td> Location: </td>
            <td>
                <?php
        
                $sql_test= "SELECT * FROM Bookings ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($conn, $sql_test);

                if(mysqli_num_rows($result) > 0)
                {
                     while($row = mysqli_fetch_assoc($result)) {
                        echo $row["location"];
                        $location = $row["location"];
                ?>
            </td>
        </tr> 
        <tr>
            <td> Movie: </td>
            <td>
            <?php
                        echo $row["movie"];
                ?>
            </td>
        </tr> 
        <tr>
            <td> day: </td>
           <td>
            <?php
                        echo $row["day"];
                        $day = $row["day"];
                ?>
            </td>
        </tr>
        <tr>
            <td> Time: </td>
           <td>
            <?php
                        echo $row["time"] ;
                ?>
            </td>
        </tr>
        <tr>
            <td> Tickets: </td>
            <td>
            <?php
                        echo $row["ticket"] ;
                    }
                } else {
                echo "error: " . $sql . "<br>" . mysqli_error($conn); 
                }
                    
                ?>
            </td>
        </tr>
        <tr>
            <td> Total: </td>
            <td>
            <?php
                $sql = "SELECT DISTINCT price FROM price WHERE location='$location' AND days='$day'";
                $sql_test= "SELECT ticket FROM Bookings ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($conn, $sql);
                $result_b = mysqli_query($conn, $sql_test);

                if(mysqli_num_rows($result) > 0)
                {
                     while($row = mysqli_fetch_assoc($result)) {
                        $price = $row["price"];
                    }
                    while($row = mysqli_fetch_assoc($result_b)) {
                         $ticket = $row["ticket"];
                    }
                    $total = $price * $ticket;
                    echo $total ;
                } else {
                echo "error: " . $sql . "<br>" . mysqli_error($conn); 
                }
                    
                ?>
            </td>
        </tr>
        
    
    </table>
                            </div>
                        </div>
                         <div class="col-md-4">
                            </div>
                    </form>
				</div>
			</div>
        </div>
    </div>

<div class="cardd">
<form action="thankyou.php" method="post">
<div id="card-success" class="hidden">
  <i class="fa fa-check"></i>
  <p>Payment Successful!</p>
</div>
<div id="form-errors" class="hidden">
  <i class="fa fa-exclamation-triangle"></i>
  <p id="card-error">Card error</p>
</div>
<div id="form-container">

  <div id="card-front">
    <div id="shadow"></div>
    
    <!--- end card image container --->

    <label for="card-number">
        Card Number
      </label>
    <input type="number" name="cardN" placeholder="1234 5678 9101 1112" maxlength="20" required="">
    <div id="cardholder-container">
      <label for="card-holder">Card Holder
      </label>
      <input type="text" pattern="^[a-zA-Z]+$" id="card-holder" name="cardH" placeholder="e.g. John Doe" required=""/>
    </div>
    <!--- end card holder container --->
    <div id="exp-container">
      <label for="card-exp">
          Expiration
        </label>
      <input name="month" type="number" min="1" max="12" placeholder="MM" length="2" required="">
      <input name="year" type="number" min="2019" max="2026" placeholder="YY" length="2" required="">
    </div>
        <div id="cvc-container">
      <label for="card-cvc"> CVV</label>
      <input id="card-cvc" placeholder="XXX" type="number" name="cvv" min-length="3" max-length="3" required="">
      <p style="font-size: 10px;">Last 3 digits</p>
    </div>
    <!--- end CVC container --->
    <!--- end exp container --->
  </div>
  <!--- end card front --->
  <div id="card-back">
    <div id="card-stripe">
    </div>

  </div>
  <!--- end card back --->
  <input type="text" id="card-token" />
  <input type="submit" name="submit" id="card-btn" value="submit">

</div>
</form>
</div>
<!--- end form container --->

<script>
	var currentTime = new Date(),
      hours = currentTime.getHours(),
      minutes = currentTime.getMinutes();

	if (minutes < 10) {
	 minutes = "0" + minutes;
  }
 document.cookie = "currentTime";
</script>
    
<!--payment-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://use.fontawesome.com/f1e0bf0cbc.js"></script>
    
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