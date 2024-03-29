<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$description = htmlspecialchars($_POST["description"]);

$message = "Name: " . $name . "<br>" .
			"Email: " . $email . "<br>" .
			"Description: " . $description . "<br>";

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "barsandtone27@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "emupoop8";

//Set who the message is to be sent from
$mail->setFrom('barsandtone27@gmail.com', 'Bars Tone');

//Set an alternative reply-to address
$mail->addReplyTo('barsandtone27@gmail.com', 'Bars Tone');

//Set who the message is to be sent to
$mail->addAddress('mmnormyle@gmail.com', 'Matthew Normyle');

//Set the subject line
$mail->Subject = 'Submit Content Request';

$mail->Body = $message;

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}