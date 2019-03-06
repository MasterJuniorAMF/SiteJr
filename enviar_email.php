<?php

	$email_remetente = "mailermasterjr@gmail.com";
	$headers = "MIME-Version: 1.1\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
	$headers .= "From: $email_remetente\n"; // remetente
	$headers .= "Return-Path: $email_remetente\n"; // return-path
	$headers .= "Reply-To: $$email \n"; // Endereço (devidamente validado) que o seu usuário informou no contato
	$txt = ($_POST['corpo']);
	$subject = ($_POST['assunto']);
	$to = "mailermasterjr@gmail.com";
	$email   = ($_POST['email']);
	
	$retorno = mail("mailermasterjr@gmail.com", $subject, "$txt", $headers, "-f$email_remetente");

	if(retorno === false){

		echo('caraio');

	}else{

		echo('uhu');

	}

?>

