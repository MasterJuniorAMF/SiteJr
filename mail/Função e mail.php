<?php

require 'PHPMailer/PHPMailerAutoload.php';
	
$Mailer = new PHPMailer();

//Define que será usado SMTP
$Mailer->IsSMTP();

//Enviar e-mail em HTML
$Mailer->isHTML(true);

//Aceitar carasteres especiais
$Mailer->Charset = 'UTF-8';

//nome do servidor
$Mailer->Host = ' smtp.umbler.com';

//Porta de saida de e-mail 
$Mailer->Port = 587;

?>
