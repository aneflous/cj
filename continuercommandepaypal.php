 <?php ini_set('session.save_path', 'C:\wampSERVER\tmp');
session_start();  ?>
<html>
    <head>
  <style>

       #right{

     position:absolute;
     top:300px;
     left:600px;
     }

        #left{

     position:absolute;
     top:300px;
     left:300px;
     }
     body{
        text-align:center;
        font-size:22px;

     }

   </style>
    </head>
<body>
<?php


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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

try {
    $conn = mysqli_connect($servername, $username, $password,$dbname);
                       $con = mysqli_connect($servername, $username, $password,$dbname);
               $sql = $con->query("SELECT * FROM prod where id like '$id'");

                                     $row=mysqli_fetch_array($sql);

                                       $nvprix=0;

                         $sqltest =$conn->query( "select * from promo where id_produit like '$id'");
                                   $cout = mysqli_num_rows($sqltest);
                                       $roww = mysqli_fetch_array($sqltest);
                                                 if ($cout != 0)
                                                 $nvprix=$roww['nvprix'];

                                                        if($nvprix !=0){ $p=$row['prix'];
                             $diff=$p - $nvprix; }


         if($nvprix !=0){ $p=$row['prix'];
                             $diff=$p - $nvprix;
     $montant=$nvprix ;
          }

          else {  $montant= $row['prix']; ?>
                <?php }
                                       $_SESSION['montant']= $montant;
         $req = $conn->query("insert into commande values('',NOW(),'$montant','$id')");

       if ($req) {


                                    $reqvente1 = $conn->query("select * from topvente where id_produit like '$id' ");
                                   $count = mysqli_num_rows($reqvente1);
                                       $rowq = mysqli_fetch_array($reqvente1);
                                if($count!=0){

                                                 $nb=$rowq['nbachat'];
                                                 $nbachat=$nb + 1 ;
                   $reqvente2 = $conn->query("update topvente set
                   nbachat = '$nbachat' where id_produit like '$id' ");
                                               $nvqte=$row['qte']-1;
                                               $reqventee = $conn->query("update prod
                                    set qte='$nvqte'
                                    where id like '$id'");
                                    $reqventeee = $conn->query("update prodnew
                                    set qte='$nvqte'
                                    where id like '$id'");
                       }else{
                                                      $nbachat=1;

                   $reqvente2 = $conn->query("insert into topvente values('','$id','$nbachat')");  }
                                               $nvqte=$row['qte']-1;
                                               $reqventee = $conn->query("update prod
                                    set qte='$nvqte'
                                    where id like '$id'");
                                                                        $reqventeee = $conn->query("update prodnew
                                    set qte='$nvqte'
                                    where id like '$id'");}


                             if($reqvente2){

 echo ("<script LANGUAGE='JavaScript'>
    window.alert('l achat du produit a ete bien effectu? ');
    </script>");

           ?>                                <br><br>
           <center><h2> VOTRE DEMANDE DE PAIEMENT A ETE AUTORISEE  </h2> </center>
           <br>
           <br>
                     <center><h2 style="color:black">RECAPITULATIF DE PAIEMENT</h2></center>

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
             <tr>
                 <td> <b> Montant total </b></td>
                 <td>   <?php  echo $_SESSION['montant'].",00 Dh"   ?>  </td>



             </tr>
          </tbody>
        </table>
        </form>
     <form id="right">
         <table>

          <tbody>

<!-- Commentaire : on aurait pu recuperer les produits de la BdD. Voir exemple coursPHP-2014-2.php ou coursPHP-19.php -->


             <tr>
                 <td> <b> Nom du porteur de la carte  </b>          </td>
                 <td><?php echo $nomp ?></td>

             </tr>

             <tr>
                 <td> <b> Numero de la carte</b>
                 </td>
                 <td><?php  echo $numc   ?>   </td>

             </tr>

             <tr>
                 <td> <b> Adresse </b></td>



                 <td><?php  echo $adresse   ?> </td>

             </tr>

             <tr>
                 <td> <b> code postal </b></td>
                 <td><?php echo $cp ?>  </td>



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




















            <?php


       }  }



catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
  </body>
  </html>