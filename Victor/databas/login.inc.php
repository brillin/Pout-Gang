<?php
session_start();

if (isset($_POST['loggin'])) {
  include 'dbh.inc.php';


  $uid =  $_POST['uid'];
  $pwd =  $_POST['pwd'];




//Error handlers
  if (empty($uid) || empty($pwd)) {
    header("Location:../login.php?loggin=tomt");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "Fel";
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $uid, $pwd);

      mysqli_stmt_execute($stmt);
      $resultat=mysqli_stmt_get_result($stmt);

      }



    if ($resultcheck < 1) {
      header('Location:../login.php?loggin=error');
      exit();
    }else {
      if ($row = mysqli_fetch_assoc($result)) {

        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if ($hashedPwdCheck == false) {
          header("Location:../login.php?loggin=error");
          exit();
        }elseif ($hashedPwdCheck == true) {
          // Session start
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          header('Location:../account.php?loggin=lyckad');
          exit();

        }

      }
    }
  }
}
else{
header('Location:../login.php?loggin=error');
  }
