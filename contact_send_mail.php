<?php

error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = nl2br($_POST['message']);
	$to = "info@jamtwebb.se";
	$from = $email;
	$subject = 'Mail frÃ¥n webbsidan';
	$headers = "From: $to\n";
	$headers .= "Reply-To: $from\n";
	$headers = "MIME-Version: 1.0\n";
	$headers = "Content-type: text/html; charset=UTF-8\n";



	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "Nu blev det något <strong>galet</strong>. Maila mig på crymeat@me.se så ska jag titta närmare på felet, Tack.";
	}
}
?>
