<?php

	$email   = ($_POST['email']);
	$email_remetente = "mailermasterjr@gmail.com";
	$to = "mailermasterjr@gmail.com";
	$subject = ($_POST['assunto']);
	$txt = ($_POST['corpo']);
	$headers = "Responder para:" . $email . "\r\n" .
	"Teste";

	$retorno = mail($to,$subject,$txt,$headers, "-f$email_remetente ");

	if(retorno === false){

		echo('caraio');

	}else{

		echo('uhu');

	}

?>

