
<!DOCTYPE html>
<html lang="fr">
<!-- Basic -->
<head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/stylecprofilcommande.css">
 <?php include("headproduit.php"); ?>
<link rel="stylesheet" href="css/styleproduits.css" />


</head>
<body style="background:black" >



                     <?php include("testincludeheader.php"); ?>

  <br/>

   <?php


$id     =$_POST['id'] ;
$_SESSION['id']=$id;
$nom     =$_POST['nom'] ;
$prenom  =$_POST['prenom'] ;
$adresse =$_POST['adresse'] ;
$cp      =$_POST['cp'] ;
$ville   =$_POST['ville'] ;
$tel     =$_POST['tel'] ;
$ste     =$_POST['ste'] ;
$tva     =$_POST['tva'] ;
$email=$_SESSION['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";
 try {       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



             $con = mysqli_connect($servername, $username, $password,$dbname);
               $sql = $con->query("SELECT * FROM prod where id like '$id'");

                                     $row=mysqli_fetch_array($sql);

                                     $montant= $row['prix'] ;
                                       $_SESSION['montant']= $montant;
      $req = $conn->query("SELECT * FROM panier where email like '$email'");
      $c= $con->query("SELECT * FROM panier where email like '$email'");

                  $montant= 0;

  ?>
   <div class="mainn">

            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center">
                          <img src="images/logoo.png"><br/><br/>
                            <h2><span class="theme_color" style="font-size:40px">COMMANDE </span> </h2>
                        </div>
                    </div>
                </div>
            </div><br/><br/>

                      <?php

                         $req = $con->query("insert into commandeclient values('','$id','$email','$nom','$prenom',
                                                         '$adresse','$cp','$ville','$tel','$ste','$tva')");

                                          ?>

             <?php include("cprofilcommande.php"); ?>


            <div class="row">
                <div class="col-md-9"></div>

                <div class="col-md-1"></div>

            </div>

                                <?php include("footer.php"); ?>

</div>
 <?php
 }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

</body>





<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script>
// Get the modal
var modaleye = document.getElementById('id00');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modaleye) {
    modal.style.display = "none";
  }
}
</script>
</html>