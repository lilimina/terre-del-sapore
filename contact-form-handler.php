<?php
    $userName = $_GET['name'];
	$userEmail = $_GET['email'];
	$userMessage = $_GET['message'];
	$to = "info@terredelsapore.com";
	$subject = "Email from website";
	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;
	$headers .= "From: $_REQUEST[email] <$_REQUEST[name]>\r\n";
	// $headers = "From: Terre Del Sapore <no-reply@terredelsapore.com> \r\n";
	mail($to, $subject, $body, $headers);
	header('Location: ./contact-form-thank-you.html');
?>