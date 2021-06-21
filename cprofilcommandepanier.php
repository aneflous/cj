
    <div class="section layout_padding">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                        <div class="full center">
                                                <div class="heading_main text_align_center">
                                                        <h2><span class="theme_color">DEMANDE DE PAIEMENT</span> </h2>



 <?php
$id=$_SESSION['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

try {
    $conn = mysqli_connect($servername, $username, $password,$dbname);

              $sql = $con->query("SELECT * FROM prod where id like '$id'");

                                     $row=mysqli_fetch_array($sql);

                                     $montant= $row['prix'] ;
                                       $_SESSION['montant']= $montant;


            $email=$_SESSION['email'];


             $req = $conn->query("SELECT * FROM users where email like '$email'");
                    $count = mysqli_num_rows($req);

                                if($count==1){
                                             $row = mysqli_fetch_array($req);

        $nom= $row['nom'];
        $prenom=$row['prenom'] ;
        $email=$row['email'] ;
        $adresse= $row['adresse'] ;
        $mdp= $row['password'] ;

            ?>

                <div id="login-box" >
                        <div class="left-box">

         <form method="post" action="continuercommandepaypalpanier.php" onsubmit="return validate(this)" >
                            <table>

          <tbody>

<!-- Commentaire : on aurait pu recuperer les produits de la BdD. Voir exemple coursPHP-2014-2.php ou coursPHP-19.php -->


             <tr>
                 <td> <b> Nom du porteur de la carte </b>          </td>
                 <td> <input type="text" name="nomp" placeholder="Nom du porteur de la carte" /></td>

             </tr>

             <tr>
                 <td> <b> Numéro de carte de paiement</b>
                 </td>
                 <td> <input type="number"  name="numc" placeholder="Numéro de carte de paiement"/>   </td>

             </tr>



             <tr>
                 <td> <b> Code de vérification </b></td>
                <td><input type="number"  name="codev" placeholder=" Code de vérificationcode postale"/>  </td>



             </tr>
             <tr>
                 <td> <b> Date d'expiration </b></td>



                 <td>    <center>
                            <table style="width: 50%">
                                <tr>
                                    <td style="width: 20%">
                                        <select name="datemois">
                                            <option selected="selected" value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </td>
                                    <td style="width: 2%">

                                    </td>
                                    <td style="width: 40%">
                                        <select name="dateannee">
<option value=20>2020</option><option value=21>2021</option><option value=22>2022</option><option value=23>2023</option><option value=24>2024</option><option value=25>2025</option><option value=26>2026</option><option value=27>2027</option><option value=28>2028</option><option value=29>2029</option><option value=30>2030</option><option value=31>2031</option><option value=32>2032</option><option value=33>2033</option><option value=34>2034</option><option value=35>2035</option><option value=36>2036</option><option value=37>2037</option><option value=38>2038</option><option value=39>2039</option>                                            @@years@@
                                        </select>
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            </table></center></td>

             </tr>
                               <!-- on ajoute en champs cache ttes les infos du produit -->
                      <input type=hidden name=montant value=<?php echo $montant ; ?> />
                      <input type=hidden name=id value=<?php echo $id ; ?> />
                      <input type=hidden name=nom value=<?php echo $nom ; ?> />
                      <input type=hidden name=prenom value=<?php echo $prenom ; ?> />
                      <input type=hidden name=adresse value=<?php echo $adresse ; ?> />
                      <input type=hidden name=cp value=<?php echo $cp ; ?> />
                      <input type=hidden name=ville value=<?php echo $ville ; ?> />
                      <input type=hidden name=tel value=<?php echo $tel ; ?> />
                      <input type=hidden name=ste value=<?php echo $ste ; ?> />
                      <input type=hidden name=tva value=<?php echo $tva ; ?> />
                      <input type=hidden name=email value=<?php echo $email ; ?> />
                      <input type=hidden name=pass value=<?php echo $mdp ; ?> />
             <tr><td></td><td><input class="conf" type="submit" name="signup" value="Continuer"/><br/>
</td></tr>
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

 <?php }   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
  <script>
  function validate(form)
      {
        fail  = validatenomp(form.nomp.value)
        fail += validatenumc(form.numc.value)
        fail += validatecodev(form.codev.value)


        if   (fail == "")   return true
        else { alert(fail); return false }

      }

      function validatenomp(field)
      {
        return (field == "") ? "Entrez un nom.\n" : ""
      }

      function validatenumc(field)
      {   return  (field.length != 16) ? "entrez une numero de 16 chiffre.\n" : ""
      }
      function validatecodev(field)
      {
        return (field == "") ? "Entrez un  code.\n" : ""
      }
      </script>
         <?php include("jsproduit.php"); ?>

