<?php
$name = htmlspecialchars($_POST["name"] ?? "");
$email = htmlspecialchars($_POST["email"] ?? "");
$message = htmlspecialchars($_POST["message"] ?? "");

$to = "jayvano.hendriks@student.graafschapcollege.nl"; // zet hier je schoolmail
$subject = "Contact formulier dinges";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: noreply@jayvanohendriks.gc-webhosting.nl\r\n"; // Zet hier je eigen domein (niet e-mail)
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
  echo "Mailtje gestuurd!";
} else {
  echo "Niet gelukt!";
}