<?php
session_start();
$_SESSION["lid"]=$_POST["username"];
?>
<!DOCTYPE html>
<html>
<title>AB Shetty Institute Of Medical Sciences</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top" style="background-color:#B03060">
  <div class="w3-bar  w3-card" style="background-color:#B03060">
  <h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;background-color:#B03060;" ><img class="img-responsive sp-default-abs" src="image/joy.jpg" width="10%" style="padding-bottom: 13px;" alt="abs"> </h1>
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
   
    <!--<a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Database</a>-->
	
   
    <a href="item.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="background-color:#B03060;color:#FFFFFF">ITEM</a>
    <a href="login1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="background-color:#B03060;color:#FFFFFF">CUSTOMER</a>
	 <a href="login1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="background-color:#B03060;color:#FFFFFF">BILL</a>
       <a href="login1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="background-color:#B03060;color:#FFFFFF">ITEM</a>
       <a href="login1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="background-color:#B03060;color:#FFFFFF">LOGOUT</a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="image/bul.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>BRIDES OF INDIA</h3>
      
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/man.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>SIMPLE,SHINE,SPARKLE</h3>
      
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/shi.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>I DREAM IN JEWELLERY</h3>
     
    </div>
  </div>
   <div class="mySlides w3-display-container w3-center">
    <img src="image/chi.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>JOY ALUKAS</h3>
     
    </div>
  </div>
-->
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">JOY ALUKAS</h2>
    <p class="w3-opacity"><i>Worlds favourite jeweller</i></p>
    <p class="w3-justify">Joy Alukkas (born 32 October 1956) is a successful businessman from Kerala, India and the founder of a distinguished conglomerate with a notable presence in Asia, USA and Europe. He is the chairman and managing director of Joyalukkas Jewellery, founded in 1987, with over 160 jewellery showrooms spread across 11 countries. After making a prominent mark in the jewellery industry, Joy Alukkas expanded into exchange, real estate, fashion and silk sectors.His family is also considered as 3rd wealthiest and powerful family in South India.   </p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Diamond</p>
        <img src="image/dia.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Gold</p>
        <img src="image/gol.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Silver</p>
        <img src="image/sil.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  
  
<!-- End Page Content -->
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->


<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
?>