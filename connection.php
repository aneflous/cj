<?php

    define('DB_SERVER', 'localhost');

    define('DB_USERNAME', 'root');

    define('DB_PASSWORD', '');

    define('DB_DATABASE', 'pfe');

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    session_start();



    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // username and password sent from form



        $email = mysqli_real_escape_string($db,$_POST['email']);

        $mypassword = mysqli_real_escape_string($db,$_POST['mdp']);



        $sql = "SELECT email FROM users WHERE email = '$email' and mdp = '$mypassword'";

            $result = mysqli_query($db,$sql);


        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);




        $count = mysqli_num_rows($result);
            if($count==1){
        $_SESSION['email'] = $email;




            $nom = "SELECT nom ,categorie FROM users WHERE email = '$email' and mdp = '$mypassword'";
                $resultnom = mysqli_query($db,$nom);
$total = mysqli_num_rows($resultnom);
if($total > 0) {
while($row = mysqli_fetch_array($resultnom,MYSQLI_ASSOC)){

                        $nomm= $row['nom'];
                        $categorie= $row['categorie'];
                        $_SESSION["nom"] =$nomm;

echo 'Bonjour . $_SESSION["nom"] . vous êtes bien connecté' ;



                }

                }



    }else{
        echo "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }








        // If result matched $myusername and $mypassword, table row must be 1 row





    }

?>