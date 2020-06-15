<?php
// check if fields passed are empty	
$company = $_POST['company'];
$station = $_POST['station'];
$post = $_POST['post'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$message = $_POST['message'];



	
// create email body and send it	
$to = 'jaipur@nissenken.or.jp'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = " Contact Form:  $company"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from Nissenken's contact form.\n\n"."Here are the details:\n\ncompany: $company\n\nstation: $station\n\nname:\n$name \nmail: $mail\naddress: $address\n TEL: $tel\nMessage: $message";

$headers = array("From: Nissenken Website",
    "Reply-To: $mail",
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);

mail($to,$email_subject,$email_body);
echo "Your message has been sent.";			

?>