

   <?php
$id=$row['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";

      $conn = mysqli_connect($servername, $username, $password,$dbname);


                                          $nvprix=0;

                         $sqltest =$conn->query( "select * from promo where id_produit like '$id'");
                                   $count = mysqli_num_rows($sqltest);
                                       $roww = mysqli_fetch_array($sqltest);
                                                 if ($count != 0)
                                                 $nvprix=$roww['nvprix'];





                          $testqte=$row['qte'];
                           if($testqte !=0) {

           if($nvprix !=0){ $p=$row['prix'];
                             $diff=$p - $nvprix;

          }

   ?>
        <?php
         if($nvprix !=0){ $p=$row['prix'];
                             $diff=$p - $nvprix;
      echo "    <strike style='color:red' >$p ,00 Dhs</strike>  "  ; echo $nvprix.",00 Dhs" ;
          }

          else { ?>
                <center> <?php  echo $row['prix'].",00 Dhs"; ?></center>   <?php } ?>








<form class="form" action="visualiserproduit.php" method=post  TARGET=_BLANK >
            <!-- on ajoute en champs cache ttes les infos du produit -->
                      <input type=hidden name=id value=<?php echo $row['id']; ?> />
             <input type=hidden name=marque value=<?php echo $row['marque']; ?> />
                      <input type=hidden name=descr value="<?php echo $row['descriptions'] ?>" />
                      <input type=hidden name=prix  value="<?php echo $row['prix'] ?>" />
                      <input type=hidden name=action value=visualiser />
            <button type=submit    style='font-size:24px;background:black'><i class="fa fa-eye"></i></button>
                   </form>
                <form class="form"  action="ajouteraupanier.php" method=post  TARGET=_BLANK >
            <!-- on ajoute en champs cache ttes les infos du produit -->
                      <input type=hidden name=id value=<?php echo $row['id']; ?> />
             <input type=hidden name=marque value=<?php echo $row['marque']; ?> />
                      <input type=hidden name=descr value="<?php echo $row['descriptions'] ?>" />
                      <input type=hidden name=prix  value="<?php echo $row['prix'] ?>" />
                      <input type=hidden name=action value=Ajouter />
            <button type=submit    style='font-size:24px;background:black'><i class="fas fa-cart-arrow-down"></i>	</button>
                               </form>

             <form  class="form" action="acheter.php" method=post  TARGET=_BLANK >
            <!-- on ajoute en champs cache ttes les infos du produit -->
                      <input type=hidden name=id value=<?php echo $row['id']; ?> />
             <input type=hidden name=marque value=<?php echo $row['marque']; ?> />
                      <input type=hidden name=descr value="<?php echo $row['descriptions'] ?>" />
                      <input type=hidden name=prix  value="<?php echo $row['prix'] ?>" />
                      <input type=hidden name=action value=Acheter />
            <button type=submit    style='font-size:24px;background:black'>Acheter</button>
    </form>








   <?php }     else{
      echo "    <span style='color:red' >PAS EN STOCK </span>  " ;
         }?>