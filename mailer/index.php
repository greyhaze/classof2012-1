<?php
$action = array_key_exists('action', $_POST)?$_POST['action']: '';

if($action == 'contact'){
	// The message
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70);
	
	
	$headers = 'From: ' . $_SERVER['SERVER_ADMIN'] . "\r\n" .
			'Reply-To: ' . $_POST['email'] . "\r\n" .
			"Disposition-Notification-To: " . $_POST['email'] . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	echo $headers;
	
	// Send
	if(mail('rhildred@gmail.com', $subject, $message, $headers)){
		echo "mail sent ";
	}else{
		echo "mail failed";
	}
	

}
include 'views/contact.php';
?>
