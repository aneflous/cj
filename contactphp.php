<?php



    $email = $_POST['email']; //prend l'email de la table

    $dest = "matermatique2020@gmail.com";
    $sujet = "contact ";

        $nom= $_POST['name'];

$number=$_POST['number'];
$message=$_POST['message'];
         ?>
  <?php $plan = 'index.php' //le lien de ta page ?>

      <?php $corp = 'c est :' .$nom;
            $corp .= " tel : ".$number ;
            $corp .= " email : ".$email ;
            $corp .= " message : ".$message ; ?>
<?php
    $headers = "From: $email";

    mail($dest, $sujet, $corp, $headers);
if (mail($dest, $sujet, $corp, $headers)) {
        echo "Email envoyé avec succès à $dest ...";
    } else {
        echo "Échec de l'envoi de l'email...";
    }


               echo '<script language="javascript">';
        echo 'alert("votre message a ete bien envoyé")';
        echo '</script>';
        echo '<script>window.close()</script>';









   ?>
