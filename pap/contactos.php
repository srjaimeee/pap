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
		.padding-form-cont-left{
			padding-left: 30%;
			margin-left: -55%;
		}
		.padding-form-cont-rigth{
			padding-right: 30%;
		}
		.btn-cont{
			padding-left: 80%;
			padding-bottom: 1%;
		}
		.padding-form-cont-single{
			padding-right: 80%;
		}
		.padding-form-cont-morada{
			padding-right: 55%;
		}
		.padding-label{
			padding-top: 2%;
		}
	</style>
</head>
<body id="main">
	<?php
	include('navbar1.html');
	?>
	<div class="w3-row">
		<form class="w3-container" action="" method="POST">
	        <div class="w3-section">
	        	<div class="w3-col m6 padding-form-cont-rigth">
		            <label class="w3-left"><b>Nome</b></label>
		            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Nome" name="nome" required>
	        	</div>
	        	<div class="w3-col m6 padding-form-cont-left">
		            <label><b>Apelido</b></label>
		            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Apelido" name="apelido" required>
		        </div>
		        <div class="w3-col m12 padding-form-cont-morada">
		            <label><b>Morada</b></label>
		            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Morada" name="morada" required>
		        </div>
		        <div class="w3-col m12 padding-form-cont-single">
		            <label><b>Data de Nascimento</b></label>
		            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Data de Nascimento" name="data_nascimento" required>
		        </div>
		        <div class="w3-col m12 padding-form-cont-single">
		            <label><b>Número Fiscal</b></label>
		            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Número Fiscal" name="numero_fiscal" required>
		        </div>
		        <div class="w3-col m12 padding-form-cont-single">
		            <label><b>Endereço de Email</b></label>
		            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Endereço de Email" name="email" required>
		        </div>
		        <div class="w3-col m12 padding-form-cont-single">
		            <label><b>Contacto</b></label>
		            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Apelido" name="apelido" required>
		        </div>
		        <div class="w3-row">
			        <div class="w3-col m12 padding-label">
			            <label><b>Informação de inicio de sessão</b></label>
			        </div>
			        </div>
			        <div class="w3-col m6 padding-form-cont-rigth">
			        	<label><b>Password</b></label>
			        	<input class="w3-input w3-border w3-margin-bottom" type="password" name="password">
			        </div>
			        <div class="w3-col m6 padding-form-cont-left">
			        	<label><b>Confirmar Password</b></label>
			        	<input class="w3-input w3-border w3-margin-bottom" type="password" name="conf_password">
		       		</div>
		       		<div class="w3-col m12 btn-cont">
			        	<button class="w3-button w3-green" type="submit">Submeter</button>
			        </div>
			    </div>
	    </form>
    </div>
    <?php
	include('footer.html');
	?>
</body>
</html>