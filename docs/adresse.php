<!DOCTYPE html>

<html>

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



 <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <style>

#login-box
{
    position: relative;
    top:0px;
    margin:auto;

    height: 440px;
    width: 700px;
    background: #ffc107;
    opacity:0.7;
    color:black;

}

.left-box
{
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;

    padding: 20px;
    width: 700px;
    height: 350px;
}

.left-box input[type="text"], .left-box  input[type="email"]   ,
.left-box input[type="password"]
{
    display: block;
    box-sizing: border-box;
    margin-bottom: 10px;
    margin-left:30px;
    padding: 4px;
    width: 370px;
    height: 32px;
    border: none;
    outline: none;
    border-bottom: 1px solid black;
    font-family: sans-serif;
    font-weight: 450;
    font-size: 20px;
    transition: 0.2s ease;
    opacity:0.8;
    color:black;
}

.left-box  input[type="submit"]
{
    margin-bottom: 28px;
    width: 200px;
    height: 32px;
    background: black;
    border: none;
    border-radius: 2px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    cursor: pointer;

}

input[type="submit"]:hover,
input[type="submit"]:focus
{
    background: white;
    transition: 0.2s ease;
    color:black;
    font-weight: bold;

}
span{
    font-weight:bold;
    font-size:20px;
    color:black;
}
.conf{

float: right;


}
        </style>
</head>



<body style="background-color: black">

            <?php include("headerc.php"); ?>
    <div class="section layout_padding">

             <center> <h2><span class="theme_color">Nouvelle adresse</span> </h2>  </center>
                                                </div>

                <div id="login-box" >
                        <div class="left-box">


                            <table>

          <tbody>

<!-- Commentaire : on aurait pu recuperer les produits de la BdD. Voir exemple coursPHP-2014-2.php ou coursPHP-19.php -->


             <tr>
                 <td> <b> Nom </b>          </td>
                 <td> <input type="text" name="nom" placeholder=""/></td>

             </tr>

             <tr>
                 <td> <b> Prenom</b>
                 </td>
                 <td> <input type="text" name="prenom" placeholder=""/>   </td>

             </tr>

             <tr>
                 <td> <b> Adresse </b></td>



                 <td><input type="text" name="adresse" placeholder=""/>  </td>

             </tr>
              <tr>
                 <td> <b> Société </b>(Optionnel)</td>



                 <td><input type="text" name="societe" placeholder=""/>  </td>

             </tr>
             <tr>
                 <td> <b> Numéro d'identification fiscale </b> (Optionnel)</td>



                 <td><input type="text" name="if" placeholder=""/>  </td>

             </tr>

             <tr>
                 <td> <b> email </b></td>
                 <td><input type="email" name="email" placeholder=""/>     </td>



             </tr>
             <tr>
                 <td> <b> Mot de passe </b></td>
                 <td><input type="email" name="email" placeholder=""/>     </td>



             </tr>
             <tr>
                 <td> <b> Nouveau mot de passe </b></td>
                 <td><input type="email" name="email" placeholder=""/>     </td>



             </tr>
             <tr><td></td><td><input class="conf" type="submit" name="signup" value="Enregistrer"/><br/>
</td></tr>
          </tbody>
        </table>


                                </div>
                </div>


             <?php include("footer.php"); ?>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.pogo-slider.min.js"></script>
        <script src="js/slider-index.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/form-validator.min.js"></script>
        <script src="js/contact-form-script.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/images-loded.min.js"></script>
        <script src="js/custom.js"></script>
            <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
        });
}
</script>

</body>


</html>