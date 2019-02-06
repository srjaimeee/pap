
<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
img {
  
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.teste{
  margin-bottom: 20%;
}
</style>
</head>

<body>


<div class="w3-row">
  <div class="w3-content w3-section padding-top" style="max-width:95%">
    <img class="mySlides" src="img/img1.jpg" style="width:100%">
    <img class="mySlides" src="img/img2.jpg" style="width:100%">
    <img class="mySlides" src="img/img3.jpg" style="width:100%">
    <!--<div class="w3-center w3-container teste w3-xxlarge w3-text-black" style="width:95%">-->
    <div class="w3-center w3-xxlarge">
      <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
      <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
  </div>
</div>
<div class="w3-row w3-red">
  <div class="w3-container w3-padding-24">
    <?php
    include('navbar2.html');
    ?>
  </div>
</div>

<footer class="w3-black">
  <div class="w3-center">
    yyy<br>
    wwwwwwwwwwwwwwwwwwwwwww<br>
    yyy<br>
    yyy<br>
    yyy<br>
    yyy<br>
    yyy<br>
    yyy<br>
  </div>
  
</footer>



</body>
</html>
<script>
var myIndex = 0;
currentDiv(1)
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
 // if (myIndex==0) {currentDiv(1);}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  plusDivs(1);
  setTimeout(carousel, 5000); // Change image every 5 seconds
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-black", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-black";
}
</script>