<!DOCTYPE html>
<html lang="fr">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Projet</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="recuperer.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">


</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>

 <?php include("header.php"); ?>


    <!-- Sslide -->


    <div class="section layout_padding" id="connection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center">

        <div id="login-box" >
            <div class="left-box">

                  <span> <i class="fas fa-id-card"></i> Félicitation ! Vous avez bien changé le mot de passe !
                  <a href="s-identifier.php">cliquez ici</a> pour s authentifier   </span>

                    <form action="recuperationphp.php" method="post" >


                    </form>
                </div>
        </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include("footer.php"); ?>


    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

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