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


function validateFile($file) {
	$fileName = basename($file["name"]);
	$fileType = pathinfo($fileName,PATHINFO_EXTENSION);
	$fileSize = $file["size"];
	if ( $fileType != 'pdf' ) {
		include 'inc/filetype-fail.php';
		return false;
	} elseif ( $fileSize > 20000000 ) { // 20MB
		include 'inc/filesize-fail.php';
		return false;
	} else {
		//echo 'Successfully validated '.$file["name"].'.<br>';
		return true;
	}
}

	
function uploadFile($file, $email) {
    // Extract student id from email
    $studentId = explode("@", $email)[0];
    
	$target_dir = "temp/";
	$target_file = $target_dir . $studentId . ".pdf";
	if (move_uploaded_file($file["tmp_name"], "/var/www/html/" . $target_file)) { // successfully uploaded file
		return $target_file;
	} else {
		include 'inc/upload-fail.php';
		exit();
	}
}


if (isset($_POST["submit"])) {
	$mailcheck = spamcheck($_POST["email"]);
	
	if ($mailcheck == FALSE) { //don't send email and display invalid email address page
		include "inc/mailcheck-fail.php";
	} else { //gather data and send email
		
		$subject = "You've received a Director Application";
		$first = $_POST["firstname"];
		$last = $_POST["lastname"];
		$email = $_POST["email"];
		$yos = $_POST["year-of-study"];
		$faculty = $_POST["faculty"];
		
		// Begin building the message
		$msg_start = "<html><body>";
		$msg_start .= "<p><strong>Name:</strong> $first $last</p>";
        $msg_start .= "<p><strong>Email:</strong> $email</p>";
        $msg_start .= "<p><strong>Year of Study:</strong> $yos</p>";
        $msg_start .= "<p><strong>Faculty:</strong> $faculty</p>";
		
		$univQ = $_POST["universal-q"];
		
		$msg_start .= "<p><strong>Tell us why you want to be a part of Western Founder Network. Remember your response, we would love for you to share with us why you connect with FN during the interview stage.</strong><br>$univQ</p>";
         
        $resume = $_FILES['resume'];
		$uploadOk = validateFile($resume);
		
		if ( $uploadOk ) {
			$resumeLink = "http://www.foundersnetwork.ca/" . uploadFile($resume, $email);
			$msg_start .= "<a href='$resumeLink'>Click Here to View Resume</a>";
        }
		
		$portfolios = $_POST["portfolios"];
		foreach ($portfolios as $portfolio) {
    		// Get the recruiter's email
    		$recruiterEmail = $_POST[$portfolio . "-email"];
    		$msg_middle = "";
    		
    		// Get the optional positions and add them to the message
    		if (array_key_exists($portfolio . "-positions", $_POST)) {
        		
        		$positions = $_POST[$portfolio . "-positions"];
        		
        		if (count($positions) > 0) {
            		
            		$msg_middle .= "<p><strong>Specific positions applicant is interested in:</strong><ul>";
            		
            		foreach ($positions as $position) {
                        $msg_middle .= "<li>$position</li>";
            		}
            		
            		$msg_middle .= "</ul></p>";
        		}
    		}
    		
    		// Get answers to the questions and add them to the message
    		$q1Question = $_POST[$portfolio . "-q1-q"];
    		$q1Answer = $_POST[$portfolio . "-q1"];
    		
    		$q2Question = $_POST[$portfolio . "-q2-q"];
    		$q2Answer = $_POST[$portfolio . "-q2"];
    		
    		$msg_middle .= "<p><strong>$q1Question</strong><br>$q1Answer</p>";
            $msg_middle .= "<p><strong>$q2Question</strong><br>$q2Answer</p>";
            
            $msg_end = "</body></html>";
		
    		$msg = $msg_start . $msg_middle . $msg_end;
    		
    		$headers = "From: noreply@foundersnetwork.ca\r\n";
    		$headers .= "CC: communications@foundersnetwork.ca\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
            // Send email
    		//$recruiterEmail = 'reid.vender@me.com';
    		$mail_sent = mail($recruiterEmail, $subject, $msg, $headers);
    		
    		if (!$mail_sent) {
        		include 'inc/mail-fail.php';
        		exit();
    		}
		}
		if ($mail_sent) {
    		include 'inc/success.php';
        }
	}	
}
	
?>