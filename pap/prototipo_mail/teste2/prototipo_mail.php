<?php
	include('PHPMailer/_lib/class.phpmailer');

	$Mailer = new PHPMailer();

	$Mailer->IaSMTP();

	$Mailer->iaHTML(true);

	$Mailer->Charset='UTF-8';

	$Mailer->SMTPAuth=true;
	$Mailer->SMTPSecure='ssl';

	$Mailer->'localhost';

	$Mailer->465;

	$Mailer->Username='root';
	$Mailer->Pssword='ola';


	$Mailer->FromName='zeus';

	$Mailer->Subject='titulo';

	$Mailer->Body='conteudo';

	$Mailer->AltBody='hhhh';

	$Mailer->AddAddress('miguelfilipe.099@gmail.com');

	if($Mailer->Send()){
		echo "enviado";
	}else{
		echo "n enviado: ".$Mailer->ErrorInfo;
	}
?>