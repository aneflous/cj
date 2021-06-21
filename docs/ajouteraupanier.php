
<?php ini_set('session.save_path', 'C:\wampSERVER\tmp');
session_start();  ?>
  <?php if (isset($_SESSION['email'])) {  ?>
<?php
$id=$_POST['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

try {
    $conn = mysqli_connect($servername, $username, $password,$dbname);

                                $email=$_SESSION['email'];
                              
                                $sql1 = "insert into panier values ('','$email','$id')";


                                             $result1 = mysqli_query($conn,$sql1);
                                             if($result1){
        echo '<script language="javascript">';
        echo 'alert("l ajout du produit a votre panier a ete bien effectué")';
        echo '</script>';
        echo "<script>window.close();</script>"; }



}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
<?php }else
{
        echo '<script language="javascript">';
        echo 'alert("Vous devez s authentifier pour pouvoir ajouter au panier et commander")';
        echo '</script>';
        echo "<script>window.close();</script>";}

