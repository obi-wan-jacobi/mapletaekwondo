<?php
	
	if(($_POST["name"])&&($_POST["email"])&&($_POST["message"])) { 
	
		$email_subject = 'You have a new email from ' . $_POST["name"];
		$email_body    = '<p>From: <b>' . $_POST["name"] . '</b></p><p>' . $_POST["user_subject"] . '</p>' . '</b></p><p>' . $_POST["message"] . '</p>';
		$email_headers .= 'Content-type: text/html; charset=utf-8' . "\\r\
";
		$email_headers .= 'From: '. $_POST["email"] . " \\r\
"; 
		
		mail('changmyunglee3888@gmail.com', $email_subject, $email_body, $email_headers);
	
	}

?>
