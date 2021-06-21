<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp=$_POST['mdp'] ;
$adresse=$_POST['adresse'];
$email=$_POST['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //test sur le nom et l'email  , s'ils sont nouveaux ...

        $sql = "SELECT email FROM users WHERE email = '$email' ";

        $result = mysqli_query($dbname,$sql);
        $count = mysqli_num_rows($result);
                                if($count>0){
                               echo ("il existe déja un compte avec cet email , changez le") ; }

                      if($count==0){
        $_SESSION['email'] = $email;


$sql = "INSERT INTO users (login,email,password,nom,prenom,adresse)
VALUES ('','$email','$mdp','$nom','$prenom','$adresse')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Vous êtes inscrit avec succès.";


       }else
       echo ("Ce login est déja utilisé")  ;
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>