<?php	
	if(empty($_POST['']))
	{
		return false;
	}
	
	$ = $_POST[''];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from FET.";
	$email_body = "You have received a new message. \n\n".
				  ": $ \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>