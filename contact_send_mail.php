<?php
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = nl2br($_POST['message']);
	$to = "info@webbkon.se";
	$from = $email;
	$subject = 'Mail från webbsidan';
	$message = '<b>Namn:</b> '.$name.' <br><b>Email:</b> '.$email.' <br><b>Meddelandet:</b> <p>'.$message.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=UTF-8\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "Skickat!";
	} else {
		echo "Nu blev det något <strong>galet</strong>. Maila mig på info@webbkon.se så ska jag titta närmare på felet, Tack.";
	}
}
?>
