<?php

	$email   = ($_POST['email']);
	$to = "mailermasterjr@gmail.com";
	$subject = ($_POST['assunto']);
	$txt = ($_POST['corpo']);
	$headers = "Responder para:" . $email . "\r\n" .
	"Teste";

	$retorno = mail($to,$subject,$txt,$headers);

	if(retorno === false){

		echo('caraio');

	}else{

		echo('uhu');

	}

?>

