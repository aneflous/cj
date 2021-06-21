 <?php ini_set('session.save_path', 'C:\wampSERVER\tmp');
session_start();  ?>
<?
  require_once("Paypal.php");
$email=$_SESSION['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pfe";


    $conn = mysqli_connect($servername, $username, $password,$dbname);




            $email=$_SESSION['email'];


             $req = $conn->query("SELECT * FROM users where email like '$email'");
                    $count = mysqli_num_rows($req);

                                if($count==1){
                                             $row = mysqli_fetch_array($req);
                                              $pass=$row['password'];




$p = new Paypal();

  $p->SetEmail("user@email.com");
  $p->SetPassword("password");
  $p->SetCurrency("DH");

  // get balance when there is only one type
  // of currency
  $bal = $p->GetBalance();
  echo "<pre>My Balance: $bal<BR><BR>";

  // get balances where there are multiple currencies
  $bal = $p->GetMultipleBalances();    
  print_r($bal);

  // get all transactions and print them out
  $trans = $p->GetTransactions();
  print_r($trans);




?>
