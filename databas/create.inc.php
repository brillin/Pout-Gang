<?php


if (!isset($_POST['registrering'])) {
  header('Location:../start.php?registrering=fel');
}
else{

  include_once 'dbh.inc.php';

  $first =  $_POST['first'] ;
  $last =  $_POST['last'];
  $email =  $_POST['email'];
  $uid =  $_POST['uid'];
  $pwd =  $_POST['pwd'];
  $pwdhashed = password_hash($pwd, PASSWORD_DEFAULT);


  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    header("Location:../start.php?registrering=tomt");
    exit();
  }


  else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location:../start.php?registrering=email&first=");
      exit();
    }
    else {
        $sql1 = "SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query($conn, $sql1);
        $resultcheck = mysqli_num_rows($result);



        if ($resultcheck > 0) {
          header("Location:../start.php?registrering=taken");
          exit();
        }
    else {
        $sql1 = "SELECT * FROM users WHERE user_email='$email'";
        $result = mysqli_query($conn, $sql1);
        $resultcheck = mysqli_num_rows($result);


        if ($resultcheck > 0) {
          header("Location:../start.phpregistrering=emailtaken");
          exit();
        }
      if (!preg_match("/^[a-öA-Ö]*$/", $first) || !preg_match("/^[a-öA-Ö]*$/", $last)) {
        header("Location:../start.php?registrering=char");
        exit();
      }
      else {

  $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
  VALUES (?,?,?,?,?);";



    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "Sql statement prepartion error";
    }
    else {
      mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwdhashed);

      mysqli_stmt_execute($stmt);
      $resultat=mysqli_stmt_get_result($stmt);

      }

            // sql to create table
            $sqltable = "CREATE TABLE  `$uid` (
              basket_items VARCHAR(60) NOT NULL,
              basket_quantity VARCHAR(60) NOT NULL
              )";

            if ($conn->query($sqltable) === TRUE) {
                echo "Table created successfully";
                header("Location:../start.php?registrering=fardig");
                exit();

              }
            else {
                echo "Error creating table: " . $conn->error;
                header("locaton:../start.php?error=table");
                $conn->close();
                exit();
            }



          }
        }
     }
   }
}
