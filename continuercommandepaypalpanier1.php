 <?php ini_set('session.save_path', 'C:\wampSERVER\tmp');
session_start();  ?>

<!DOCTYPE html>

<html>

<head>
 <meta charset="UTF-8">
        <?php include("headproduits.php"); ?>
        <link rel="stylesheet" href="style.css">
        <style>

#login-box
{
    position: relative;
    top:0px;
    margin:auto;

    height: 380px;
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

<?php include("testincludeheader.php"); ?>
    <div class="section layout_padding">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                        <div class="full center">
                                                <div class="heading_main text_align_center">
                                                	<img src="images/logoo.png"><br/><br/>
                                                        <h2><span class="theme_color">  VOTRE DEMANDE DE PAIEMENT A ETE AUTORISEE </span> </h2>



 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

 $id     =$_POST['id'] ;
$nom     =$_POST['nom'] ;
$prenom  =$_POST['prenom'] ;
$adresse =$_POST['adresse'] ;

$nomp      =$_POST['nomp'] ;
$numc      =$_POST['numc'] ;
$codev      =$_POST['codev'] ;
$datemois     =$_POST['datemois'] ;
$dateannee      =$_POST['dateannee'] ;
$cp      =$_POST['cp'] ;
$ville   =$_POST['ville'] ;
$tel     =$_POST['tel'] ;
$ste     =$_POST['ste'] ;
$tva     =$_POST['tva'] ;

$email=$_SESSION['email'];
try {
    $conn = mysqli_connect($servername, $username, $password,$dbname);




            $email=$_SESSION['email'];


             $req = $conn->query("SELECT * FROM users where email like '$email'");
                    $count = mysqli_num_rows($req);

                                if($count==1){
                                             $row = mysqli_fetch_array($req);
                              ?>      <?php

        $nom= $row['nom'];
        $prenom=$row['prenom'] ;
        $email=$row['email'] ;
        $adresse= $row['adresse'] ;
        $mdp= $row['password'] ;

            ?>
                          <center><h2 style="color:white">RECAPITULATIF DE PAIEMENT</h2></center>
                <div id="login-box" >
                        <div class="left-box">

         <form id="left">
                            <table>

          <tbody>

<!-- Commentaire : on aurait pu recuperer les produits de la BdD. Voir exemple coursPHP-2014-2.php ou coursPHP-19.php -->


             <tr>
                 <td> <b> Nom </b>          </td>
                 <td><?php echo $nom ?></td>

             </tr>

             <tr>
                 <td> <b> Prenom</b>
                 </td>
                 <td><?php  echo $prenom   ?>   </td>

             </tr>

             <tr>
                 <td> <b> Adresse </b></td>



                 <td><?php  echo $adresse   ?> </td>

             </tr>

             <tr>
                 <td> <b> code postal </b></td>
                 <td> <center><?php  echo $cp   ?></center>  </td>



             </tr>
             <tr>
                 <td> <b> ville </b></td>
                 <td> <?php  echo $ville   ?> </td>



             </tr>
             <tr>
                 <td> <b> tel </b></td>
                 <td>   <?php  echo $tel   ?>  </td>



             </tr>


          </tbody>
        </table>
        </form>
     <form id="right">
         <table>

          <tbody>

<!-- Commentaire : on aurait pu recuperer les produits de la BdD. Voir exemple coursPHP-2014-2.php ou coursPHP-19.php -->


             <tr>
                 <td> <b> Nom </b>          </td>
                 <td><?php echo $nom ?></td>

             </tr>

             <tr>
                 <td> <b> Prenom</b>
                 </td>
                 <td><?php  echo $prenom   ?>   </td>

             </tr>

             <tr>
                 <td> <b> Adresse </b></td>



                 <td><?php  echo $adresse   ?> </td>

             </tr>

             <tr>
                 <td> <b> code postal </b></td>
                 <td> <center><?php  echo $cp   ?></center>  </td>



             </tr>
             <tr>
                 <td> <b> ville </b></td>
                 <td> <?php  echo $ville   ?> </td>



             </tr>
             <tr>
                 <td> <b> tel </b></td>
                 <td>   <?php  echo $tel   ?>  </td>



             </tr>


          </tbody>
        </table>
        </form>
                                </div>
                </div>                                                  </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <?php include("footer.php"); ?>

 <?php }   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
    <?php include("jsproduit.php"); ?>


</body>

</html>