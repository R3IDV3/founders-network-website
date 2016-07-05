<?php

function spamcheck($field) {
	// Sanitize e-mail address
	$field = filter_var($field, FILTER_SANITIZE_EMAIL);
	// Validate e-mail address
	if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
    	return TRUE;
	} else {
    	return FALSE;
	}
}


if (isset($_POST["submit"])) {
	$mailcheck = spamcheck($_POST["email"]);
	
	if ($mailcheck == FALSE) { //don't send email and display invalid email address page
		include "inc/mailcheck-fail.php";
	} else { //gather data and send email
		
		$subject = "You've received an Early Bird Registration";
		$first = $_POST["firstname"];
		$last = $_POST["lastname"];
		$email = $_POST["email"];
		$yos = $_POST["year-of-study"];
		$faculty = $_POST["faculty"];
		
		// Begin building the message
		$msg = "<html><body>";
		$msg .= "<p><strong>Name:</strong> $first $last</p>";
        $msg .= "<p><strong>Email:</strong> $email</p>";
        $msg .= "<p><strong>Year of Study:</strong> $yos</p>";
        $msg .= "<p><strong>Faculty:</strong> $faculty</p>";
        $msg .= "</body></html>";
		
		$headers = "From: noreply@foundersnetwork.ca\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        // Send email
		$recruiterEmail = 'communications@foundersnetwork.ca';
		$mail_sent = mail($recruiterEmail, $subject, $msg, $headers);
		
		if (!$mail_sent) {
    		include 'inc/mail-fail.php';
    		exit();
		}
    		
		if ($mail_sent) {
    		include 'inc/join-success.php';
        }
	}	
}
	
?>