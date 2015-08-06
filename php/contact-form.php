<?php
	
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	
	$emailTo = 'zurihunter92@gmail.com'; //Put your own email address here
	$subject = 'Message.';
	$body = "Name: $name \n\nEmail: $email \n\nMessage:\n$message";
	$headers = 'From: nonreply@zurihunter.github.io'.$email."\r\n" .
        'Reply-To: '.$email."\r\n".
		'Content-Type:text/html;charset=utf-8'."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('SEND'); 
	
?>
