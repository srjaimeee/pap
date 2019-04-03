<!DOCTYPE html>
<html>
<head>
	<title>doces</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.tamanho1{
        width: 25%;
        height: 10%;
        margin-top: 2%;
    	}
		
	</style>
</head>
<body class="fundo">
<?php
include('navbar1.html');
?>
<div class="w3-center">
	<a href="index_soubre.php">
		<img class="tamanho1" src="img/cor3.png" style="margin-bottom: -8%; margin-top: -3%">
	</a>
</div>
<div style="padding-top: 5%;">
<?php
include('slider.html');
?>
</div>
<?php
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