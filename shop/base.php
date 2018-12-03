<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>base</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/addbasket.inc.php">

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
<ul>
  <li> <a href="women.php">WOMEN</a></li>
  <li> <a href="kids.php">KIDS</a></li>
  <li> <a href="herr.php">MEN</a></li>
  <li> <a href="sale.php">SALE</a></li>
</ul>
  </div>
  <div id="bottomright"><div class="textright"><a href="account.php">Log-in / Sign-up</a></div>
  </div></div>
</div>

<div id="maingrid">
<div id="q">
  <img src="img/wine1.jpg" alt="wine1">
  <img src="img/wine3.jpg" alt="wine3">
</div>
<div id="e">
    <img src="img/wine2.jpg" alt="wine2">
    <img src="img/wine4.jpg" alt="wine4">
</div>
<div id="w">
  <div id="rightaside">
    <!--Namn på vara och pris -->
  Rödvin med glas<br />
  99,00kr
  <br />
  <br />
  <br />
  <!-- Olika varor -->
  <form class="" action="addbasket.inc.php" method="post">
  <select id="select">
    <option value="red">Röd</option>
    <option value="white">Vit</option>
    <option value="black">Svart</option>
  </select>
</form>
<button value="basketvin" class="button" type="button" name="basketvin">
  Lägg Till
</button>

</div>
</div>
</div>


  </body>
</html>
