<?php
	$email = $_POST['email'];
	//pega os dados que foi digitado no ID email.

	$subject = $_POST['assunto'];
	//pega os dados que foi digitado no ID sebject.

	$message = $_POST['corpo'];
	//pega os dados que foi digitado no ID message.

	$headers = "From: $email\r\n";
	$headers .= "Reply-To: $email\r\n";

	/*abaixo contém os dados que serão enviados para o email
	cadastrado para receber o formulário*/

	$corpo = "Formulário enviado\n";
	$corpo .= "Email: " . $email . "\n";
	$corpo .= "Comentários: " . $message . "\n";

	$email_to = 'mailermasterjr@gmail.com';
	//não esqueça de substituir este email pelo seu.

	$status = mail($email_to, $subject, $corpo, $headers);
	//enviando o email.

	if ($status) {
		echo "<script> alert('Formulário enviado com sucesso!'); </script>";
		header('Location: /index.html');
	
	//mensagem de form enviado com sucesso.

	} else {
		echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
		header('Location: /index.html');
	
	//mensagem de erro no envio. 
	}
?>