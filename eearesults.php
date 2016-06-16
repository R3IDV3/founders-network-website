<?php

//echo 'Beginning script.<br>';

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
	} elseif ( $fileSize > 1000000 ) { // 1MB
		include 'inc/filesize-fail.php';
		return false;
	} else {
		//echo 'Successfully validated '.$file["name"].'.<br>';
		return true;
	}
}

	
function uploadFile($file) {
	global $first, $last;
	$target_dir = "/Dropbox-Files/2015ExecutiveApplications/";
	$target_file = $target_dir . $first . "_" . $last . "-" . time() . ".pdf";
	if (move_uploaded_file($file["tmp_name"], $target_file)) { // successfully uploaded file
		return true;
	} else {
		include 'inc/upload-fail.php';
		exit();
	}
}

if (isset($_POST["submit"])) {
	$mailcheck = spamcheck($_POST["email"]);
	if ($mailcheck == FALSE) { //don't send email and display invalid email address page
		include 'inc/mailcheck-fail.php';
		exit();
	} else { //gather data and send email
		//echo 'Passed spam test.<br>';
		$subject = 'You\'ve received an Education Executive Application';
		//$recruiterEmail = 'zain.hemani@foundersnetwork.ca';
		//$recruiterEmail = 'zain.hemani7@gmail.com';
		$recruiterEmail = 'reid.vender@me.com';
		
		// assign portfolio-independent variables
		$first = $_POST['firstname'];
		$last = $_POST['lastname'];
		$email = $_POST['email'];
		$yos = $_POST['year-of-study'];
		$faculty = $_POST['faculty'];
		
		$resume = $_FILES['resume'];
		$uploadOk = validateFile($resume);
		
		if ( $uploadOk ) {
			//echo 'Preparing to upload.<br>';
			uploadFile($resume);
			
			//create a boundary string. It must be unique 
			//so we use the MD5 algorithm to generate a random hash 
			$random_hash = md5(date('r', time()));
			//define the headers we want passed. Note that they are separated with \r\n 
			$headers = "From: noreply@foundersnetwork.ca";
			//add boundary string and mime type specification 
			$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";
			//read the atachment file contents into a string,
			//encode it with MIME base64,
			//and split it into smaller chunks
		//$attachment = 'temp/' . basename($resume["name"]);
			//define the body of the message. 
			ob_start(); //Turn on output buffering 
?>


--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: multipart/alternative; boundary="PHP-alt-<?php echo $random_hash; ?>"

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/html; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

<h2>You've received an Education Executive Application!</h2> 
<p><strong>First Name:</strong> <?php echo $first; ?></p> 
<p><strong>Last Name:</strong> <?php echo $last; ?></p> 
<p><strong>Email:</strong> <?php echo $email; ?></p> 
<p><strong>Year of Study:</strong> <?php echo $yos; ?></p> 
<p><strong>Faculty:</strong> <?php echo $faculty; ?></p> 


--PHP-alt-<?php echo $random_hash; ?>-- 

--PHP-mixed-<?php echo $random_hash; ?>-- 

<?php
			//copy current buffer contents into $message variable and delete current output buffer 
			$message = ob_get_clean();
			//send the email 
			$mail_sent = @mail( $recruiterEmail, $subject, $message, $headers ); 
			//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
			$mail_sent ? include 'inc/success.php' : include 'inc/mail-fail.php';
		} else {
			exit();
		}
	}	
}
	
?>