<?php
$to      = 'joel.soto@cloudmobile.com.mx';
$subject = 'Formulario';
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_body = "Has recibido un mensaje de  $name \n ".
                  "Email: $email \n Mensaje:  $message . \n Tel.: $phone ";

$headers = 'From: joel.soto@cloudmobile.com.mx' . "\r\n" .
'Reply-To: joel.soto@cloudmobile.com.mx' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$send = mail($to, $subject, $email_body, $headers);

?>