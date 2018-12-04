
<?php
  session_start();
  if(isset($_SESSION['u_uid'])){
    session_start();
    session_unset();
    session_destroy();
    header('Location:../account.php?logout=complete');
  }

 ?>
