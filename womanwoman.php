<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women</title>
    <link rel="stylesheet" href="css/women.css">
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
<div class="showplace">
  <ul>
    <li>Home /</li>
    <li>Lorem /</li>
    <li>Ipsum</li>
  </ul>
</div>

<div id="main">
  <div id="mainleft">
    <div id="sticky">
<ul>
  <li> <a href="#">Gifts For Her</a></li>
  <li><a href="#">Gifts For Him</a></li>
  <li><a href="#"><span id="thisone">Women's All</span></a></li>
  <li><a href="#">New Arrivals</a></li>
  </ul>
  <div id="justslice"></div>
  <ul>
  <li><a href="#">Lorem</a></li>
  <li><a href="#">Ipsum</a></li>
  <li><a href="#">Dolor</a></li>
  <li><a href="#">Sit</a></li>
  <li><a href="#">Amet</a></li>
  <li><a href="#">Ornatus</a></li>
  <li><a href="#">Invenire</a></li>
</ul>
</div>
  </div>
  <div id="mainright">
    <div id="menspicture">
      WOMEN's
    </div>
    <div id="filter">
      <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('iphonese')"> Iphone 5/5s/SE</button>
        <button class="btn" onclick="filterSelection('iphone6')"> Iphone 6/6s</button>
        <button class="btn" onclick="filterSelection('iphone7')"> Iphone 7/8</button>
      </div>
    <div id="extra">
      Cases
    </div>
  </div>

  <div id="productcontainer">
    <div class="filterDiv iphonese"><a href="base.php"><img src="img/iphonese1_comp.jpg" alt="iphonese"><br />
    <span class="description">Iphone 5 Logo</span></a><br />
    Green</div>
    <div class="filterDiv iphonese"><a href="base.php"><img src="img/iphonese2_comp.jpg" alt="iphonese"><br />
    <span class="description">Iphone 5 Perfection</span></a><br />
    Purple</div>
    <div class="filterDiv iphonese"><a href="base.php"><img src="img/iphonese3_comp.jpg" alt="iphonese"><br />
    <span class="description">Iphone 5 Bae</span></a><br />
    Red</div>
    <div class="filterDiv iphone6"><a href="base.php"><img src="img/iphonesix1_comp.jpg" alt="iphonesix"><br />
    <span class="description">Iphone 6 Logo</span></a><br />
    Torquise</div>
    <div class="filterDiv iphone6"><a href="base.php"><img src="img/iphonesix2_comp.jpg" alt="iphonesix"><br />
    <span class="description">Iphone 6 Best</span></a><br />
    Green</div>
    <div class="filterDiv iphone6"><a href="base.php"><img src="img/iphonesix3_comp.jpg" alt="iphonesix"><br />
    <span class="description">Iphone 6 Hot</span></a><br />
    Pink</div>
    <div class="filterDiv iphone6"><a href="base.php"><img src="img/iphonesix4_comp.jpg" alt="iphonesix"><br />
    <span class="description">Iphone 6 Little</span></a><br />
    Purple</div>
    <div class="filterDiv iphone7"><a href="base.php"><img src="img/iphoneseven1_comp.jpg" alt="iphoneseven"><br />
    <span class="description">Iphone 7 Logo</span></a><br />
    Yellow</div>
    <div class="filterDiv iphone7"><a href="base.php"><img src="img/iphoneseven2_comp.jpg" alt="iphoneseven"><br />
    <span class="description">Iphone 7 Diamond</span></a><br />
    Pink</div>
    <div class="filterDiv iphone7"><a href="base.php"><img src="img/iphoneseven3_comp.jpg" alt="iphoneseven"><br />
    <span class="description">Iphone 7 Bad&Boujee</span></a><br />
    Orange</div>
  </div>
</div>



<script type="text/javascript">
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
  </body>
</html>
