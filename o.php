<?php
include("header.php");
?>
<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!--indicator-->
<ol class="carousel-indicator">
<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
<li data-target="#mycarousel" data-slide-to="1"></li>
<li data-target="#mycarousel" data-slide-to="2"></li>
</ol>

<!--wrapper for slides-->
<div class="carousel-inner">
<div class="item active">
<img src="C:\xampp\htdocs\innovation project\images\1.JPG" style="width:100%;height:500px">

</div>

<div class="item">
<img src="C:\xampp\htdocs\innovation project\images\2.jpg" style="width:100%;height:500px">

<div class="item">

<img src= "C:\xampp\htdocs\innovation project\images\3.jpg"  style="width:100%;height:500px">
</div>
</div>

<!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
