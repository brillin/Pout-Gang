<?php session_start();


echo '<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>';





$tabell = $_SESSION['u_uid'];
include_once 'databas/dbh.inc.php';

$sql = "SELECT basket_items, basket_quantity FROM `$tabell` ";
$results = mysqli_query($conn, $sql);

$resultat = array();

if (mysqli_num_rows($results) > 0) {
  while ($row = mysqli_fetch_assoc($results)) {
    $resultat[] = $row;
  }
}

echo "$tabell's cart: <br>";


foreach ($resultat as $rad) {
$quant =  $rad['basket_quantity']."x ";
$items =  $rad['basket_items']."<br>";
$item .= "$quant $items";
}
echo "$item";

echo '<form class="" name="beställ" method="post"><br><br>
  <input type="text" name="adress" value="" placeholder="adress" required autofocus><br>
  <input type="text" name="stad" value="" placeholder="stad" required><br>
  <input type="text" name="ort" value="" placeholder="ort" required><br>
  <input type="text" name="postnr" value="" placeholder="postnr" required><br>
<button type="submit" name="beställ">Beställ</button>
</form>
';




if (!isset($_SESSION['u_uid'])) {
  header("Location:account.php");

}

else {
  if (isset($_POST['beställ'])) {



$first = $_SESSION['u_first'];
$last = $_SESSION['u_last'];
$mail = $_SESSION['u_email'];
$adress = $_POST['adress'];
$stad = $_POST['stad'];
$ort = $_POST['ort'];
$postnr = $_POST['postnr'];

$date = date('c');

if (strlen($postnr) != 5) {
  header("Location:cart.php?postnr=fel");
}else {

if (!is_numeric($postnr)) {
  header("Location:cart.php?postnr=fel");
}else {
  $sql = "INSERT INTO `bestallning` (order_items, order_name, order_last, order_email, order_adress, order_stad, order_ort, order_postnr, order_date)
  VALUES (?,?,?,?,?,?,?,?,?);";

  $stmt =mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Sql statement prepartion error";
  }
  else {
    mysqli_stmt_bind_param($stmt, "sssssssss", $item, $first, $last, $mail, $adress, $stad, $ort, $postnr, $date);

    mysqli_stmt_execute($stmt);
    $resultat=mysqli_stmt_get_result($stmt);
    echo "$resultat";

    $sql1 ="DELETE FROM `$tabell`";

    if (!mysqli_stmt_prepare($stmt, $sql1)) {
      echo "Sql statement prepartion error";
    }
    else {
      mysqli_stmt_execute($stmt);
      $resultat1=mysqli_stmt_get_result($stmt);
      echo "$resultat1";
    }

    header("Location:cart.php?beställ=klar");
      }
    }
  }
}




}


 ?>
