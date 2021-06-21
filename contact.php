 <?php ini_set('session.save_path', 'C:\wampSERVER\tmp');
session_start();  ?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

  
</head>
<body id="contact_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
    <div id="preloader">
		<div class="loader">
			<img src="images/loader.gif" alt="#"/>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
<?php include("testincludeheader.php"); ?>


	<!-- section --> 
	   <div class="innerpage_banner">
	      <div class="container">
		     <div class="row"> 
			    <div class="col-md-12">
				   <h2>Contactez-nous</h2>
				</div>
			 </div>
		  </div>
	   </div>
	<!-- end section -->
	
	<!-- section -->
	<div id="contact" class="contact-box">
		<div class="container">
			
			<div class="row">

				<div class="col-lg-7 col-sm-7 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm"  action="contactphp.php" method="post" target="_blank">
					  <div class="row">
						<div class="col-md-66">
							<div class="form-group">
							 <input type="text" class="form-control" id="name" name="name" placeholder="Nom & Prénom" required data-error="Please enter your name" >
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-66">
							<div class="form-group">
								<input type="email" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email"  >
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Téléphone" id="number" class="form-control" name="number" required data-error="Please enter your number" >
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea name="message" class="form-control" id="message" placeholder="Votre Message" rows="8" data-error="Write your message" ></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Envoyer Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>


				<div class="col-lg-5 col-sm-5 col-xs-12">
					<div class="left-contact">
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Adresse</h4>
								<p>N° 34 La cigogne,Kenitre,Maroc</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#">matermatique2020@gmail.com</a><br>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Numéros de téléphone</h4>
								<a href="#">12345 67890</a><br>
								<a href="#">12345 67890</a>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	<!-- end section -->
      <?php include("footer.php"); ?>


	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>