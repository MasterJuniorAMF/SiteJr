<?php

$email   = ($_POST['email']);

$to = "mailermasterjr@gmail.com";
$subject = ($_POST['assunto']);
$txt = ($_POST['corpo']);
$headers = "Responder para:" . $email . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

?>

