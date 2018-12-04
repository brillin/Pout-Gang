<?php
session_start();
include_once 'dbh.inc.php';

if (!isset($_SESSION['u_uid'])) {
  header("Location:../account.php");

}
else {
  if (!isset($_POST['basketvin'])) {
  header("location:../account.php");
  }
  else {

    $tabell = $_SESSION['u_uid'];
    $antal = $_POST['antal'];
    $produkt = $_POST['produkt'];
    $basket = $produkt;
    echo "$basket";


    $sql = "INSERT INTO `$tabell` (basket_items, basket_quantity)
    VALUES (?,?);";

    $stmt =mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "Sql statement prepartion error";
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $basket, $antal);

      mysqli_stmt_execute($stmt);
      $resultat=mysqli_stmt_get_result($stmt);
      echo "$resultat";
      header("Location:../base.php");
    }
  }
}
