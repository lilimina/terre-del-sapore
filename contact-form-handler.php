<?php

if($_POST["submit"]) {
    $recipient="iliyanastef@gmail.com";
    $subject="Costumer message from website";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>