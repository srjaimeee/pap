<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<body id="main">
	<?php
	include('navbar1.html');
	?>
	<form class="w3-container" action="" method="POST">
        <div class="w3-section">
            <label class="w3-left"><b>Nome</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Nome" name="nome" required>
            <label class="w3-left"><b>Apelido</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Apelido" name="apelido" required>
            <label class="w3-left"><b>Email</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Email" name="email" required>
            <textarea rows="4" cols="50" name="ajuda" form="usrform" placeholder="Como podemos ajudar ?"></textarea>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
        </div>
    </form>

    <?php
	include('footer.html');
	?>
</body>
</html>