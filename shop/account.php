<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href="css/account.css">
  </head>
  <body>

    <div class="toptop"></div>
    <div id="nav">
      <div id="left"></div>
      <div id="middle"></div>
      <div id="right"></div>
      <div id="middleleft"></div>
      <div id="middlemiddle"></div>
      <div id="middleright"></div>
      <div id="bottomleft"><a style="text-decoration: none;" href="starttest.php"><img src="img/poutlogo.png" class="logologo" alt="logo"></a></div>
      <div id="bottommiddle">
    <ul class="navul">
      <li> <a href="women.php">WOMEN</a></li>
      <li> <a href="kids.php">KIDS</a></li>
      <li> <a href="herr.php">MEN</a></li>
      <li> <a href="sale.php">SALE</a></li>
    </ul>
      </div>
      <div id="bottomright"><div class="textright"><a href="account.php">Log-in / Sign-up</a></div>
    </div></div>
    </div>

    <div id="gridregister">


<div id="registerright">
  <div class="loggain">
    Sign Up!
  </div>
  <hr />
  <div class="registerinside">
    <div class="ir1">
      <form class="left1" action="databas/signup.inc.php" method="POST">
      <label for="registerfirst">First Name</label>
    </div>
    <div class="ir2">
      <input id="registerfirst" type="text" name="first" placeholder="">
    </div>
    <div class="ir3">
      <label for="registerlast">Last Name</label>
    </div>
    <div class="ir4">
      <input id="registerlast" type="text" name="last" placeholder="">
    </div>
    <div class="ir5">
      <label for="registeremail">E-Mail</label>
    </div>
    <div class="ir6">
      <input id="registeremail" type="text" name="email" placeholder="">
    </div>
    <div class="ir7">
      <label for="registerusername">Username</label>
    </div>
    <div class="ir8">
      <input id="registerusername" type="text" name="uid" placeholder="">
    </div>
    <div class="ir9">
      <label for="registerpassword">Password</label>
    </div>
    <div class="ir10">
      <input id="registerpassword" type="password" name="pwd" placeholder="">
    </div>

  </div>
  <hr />
  <div class="loginbutton">
        <button id="id" type="submit" name="registrering">Sign Up</button>
  </div>

      </form>
</div>

<div id="registerleft">
  <div class="loggain">
    Log-in!
  </div>
  <hr />
  <div class="registerinside">
    <div class="ir1">
    <form class="right1" action="databas/login.inc.php" method="POST">
<label for="login_user">Username</label>
</div>
<div class="ir2">
      <input id="login_user" type="text" name="uid" placeholder="">
    </div>
    <div class="ir3">

      <label for="login_password">Password</label>
    </div>
      <div class="ir4">

      <input id="login_password" type="password" name="pwd" placeholder="">
    </div>

        </div>
        <hr />
        <div class="loginbutton">
        <button id="id" type="submit" name="loggin" value="loggin">Logn In</button>
      </div>
        </form>
      </div>

  </div>
