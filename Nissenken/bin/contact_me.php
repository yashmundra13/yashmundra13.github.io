<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   empty($_POST['cname'])	||
   empty($_POST['address'])	||
   empty($_POST['zcode'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$cname = $_POST['cname'];
$address = $_POST['address'];
$zcode = $_POST['zcode'];

	
// create email body and send it	
$to = 'your-email@your-domain.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Nissenken's Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from Nissenken's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nCompany name: $cname\n\nAdress: $address\n\nZip Code: $zcode\n\nMessage:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>