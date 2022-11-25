<?php
// $to_email = "prasuluitel1@gmail.com";
session_start();

$to_email = $_SESSION['email'];

$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script from BusService";
$headers = "From: prasuluitel1@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}