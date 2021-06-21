<?php

$mdp=$_POST['mdp'] ;
$email=$_POST['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

try {
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    // set the PDO error mode to exception

  //test sur le nom et l'email  , s'ils sont nouveaux ...

        $sql = "SELECT * FROM users WHERE email LIKE '$email' and password LIKE '$mdp'";

        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
                                if($count==1){
                                    $row = mysqli_fetch_array($result);

                             /*  echo ("BIENVENU ".$row["nom"]." ".$row["prenom"]   ) ;    */

                  header("location:accueil.php");


                                      }

                      if($count==0){
    echo "Votre email ou mdp est incorrect.";


       }
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

