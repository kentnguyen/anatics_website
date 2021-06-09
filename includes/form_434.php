<?php	
	if (empty($_POST['name_8876_434']) && strlen($_POST['name_8876_434']) == 0 || empty($_POST['email_8876_434']) && strlen($_POST['email_8876_434']) == 0 || empty($_POST['message_8876_434']) && strlen($_POST['message_8876_434']) == 0)
	{
		return false;
	}
	
	$name_8876_434 = $_POST['name_8876_434'];
	$email_8876_434 = $_POST['email_8876_434'];
	$message_8876_434 = $_POST['message_8876_434'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_8876_434: $name_8876_434 \nEmail_8876_434: $email_8876_434 \nMessage_8876_434: $message_8876_434 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_8876_434";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>