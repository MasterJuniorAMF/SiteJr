<?php

	$email   = ($_POST['email']);
	$subject = ($_POST['assunto']);
	$txt = ($_POST['corpo']);
	$email_remetente = "mailermasterjr@gmail.com";
	$headers = "MIME-Version: 1.1\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
	$headers .= "From: $email_remetente\n"; // remetente
	$headers .= "Return-Path: $email_remetente\n"; // return-path
	$headers .= "Reply-To: $$email \n"; // Endereço (devidamente validado) que o seu usuário informou no contato
	
	$retorno = mail("mailermasterjr@gmail.com", $subject, "$txt", $headers, "-f$email_remetente");

	if(retorno === false){

		echo('caraio');

	}else{

		echo('foi');

	}

?>

