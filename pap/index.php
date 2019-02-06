<!DOCTYPE html>
<html>
<head>
	<title>doces</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.mySlides {display:none;}
		.w3-left, .w3-right, .w3-badge {cursor:pointer}
		.w3-badge {height:13px;width:13px;padding:0}
		.marg{margin-right: 0%}
		img {
		  
		  height: 400px;
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}
		
	</style>
</head>
<body>
<?php
include('navbar1.html');
include('slider.html');
include('footer.html');
?>

</body>
</html>

<script>
function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}



</script>