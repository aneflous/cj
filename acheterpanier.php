
<!DOCTYPE html>
<html lang="fr">
<!-- Basic -->
<head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/styleprofilcommande.css">
 <?php include("headproduit.php"); ?>
<link rel="stylesheet" href="css/styleproduits.css" />


</head>
<body style="background:black" >
                <?php   if(isset($_SESSION['email'] ))  { ?>


                     <?php include("testincludeheader.php"); ?>

  <br/>

   <?php



$id=$_POST['id'];
$email=$_SESSION['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";
 try {          $conn = mysqli_connect($servername, $username, $password,$dbname);


  $sql = $conn->query("SELECT * FROM prod where id like '$id'");

                                     $row=mysqli_fetch_array($sql);

                                     $montant= $row['prix'] ;
                                       $_SESSION['montant']= $montant;
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
                                    <?php include("profilcommandepanier.php"); ?>


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
     <?php }else{
                        echo '<script language="javascript">';
        echo 'alert(" Pour arriver à acheter un produit vous devez vous authentifier ")';
        echo '</script>';
        echo "<script>window.close();</script>";

     } ?>
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