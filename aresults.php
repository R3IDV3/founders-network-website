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
		$msg = <<<MSG

            <p><strong>Name:</strong> $first $last</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Year of Study:</strong> $yos</p>
            <p><strong>Faculty:</strong> $faculty</p>

MSG;
		
		$univQ = $_POST["universal-q"];
		
		/**********************************************************************
         *
         * UPLOAD THE RESUME WITH TIMESTAMP AND GET THE LINK AND ADD THE LINK TO THE MESSAGE
         *
         **********************************************************************/
		
		$portfolios = $_POST["portfolios"];
		foreach ($portfolios as $portfolio) {
    		// Get the recruiter's email
    		$recruiterEmail = $_POST[$portfolio . "-email"];
    		
    		// Get the optional positions and add them to the message
    		$positions = $_POST[$porfolio . "-positions"];
    		
    		if (count($positions) > 0) {
        		
        		$msg .= "<p><strong>Specific positions applicant is interested in:</strong><ul>";
        		
        		foreach ($positions as $position) {
                    $msg .= <<<MSG

                        <li>$position</li>

MSG;
        		}
        		
        		$msg .= "</ul></p>";
    		}
    		
    		// Get answers to the questions and add them to the message
    		$q1Question = $_POST[$portfolio . "-q1-q"];
    		$q1Answer = $_POST[$portfolio . "-q1"];
    		
    		$q2Question = $_POST[$portfolio . "-q2-q"];
    		$q2Answer = $_POST[$portfolio . "-q2"];
    		
    		$msg .= <<<MSG

                <p><strong>$q1Question</strong><br>$q1Answer</p>
                <p><strong>$q2Question</strong><br>$q2Answer</p>

MSG;
    		
    		// Wordwrap final message
    		$msg = wordwrap($msg, 70);
    		
    		// Send email with info and link to resume
    		mail($recruiterEmail, $subject, $msg);
		}
		
		$recruiterEmail = 'reid.vender@me.com';
		
		$resume = $_FILES['resume'];
		$uploadOk = validateFile($resume);
		
		if ( $uploadOk ) {
			//echo 'Preparing to upload.<br>';
			uploadFile($resume);
			if ( $branch == 'marketing' && $uploadOkM ) {
				uploadFile($portfolioFile);
				$attachmentM = 'temp/' . basename($portfolioFile["name"]);
			}
			//echo 'Files uploaded.<br>';
			
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
			$attachment = 'temp/' . basename($resume["name"]);
			//define the body of the message. 
			ob_start(); //Turn on output buffering 
?>


--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: multipart/alternative; boundary="PHP-alt-<?php echo $random_hash; ?>"

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/html; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

<h2>You've received a Director Application!</h2> 
<p><strong>First Name:</strong> <?php echo $first; ?></p> 
<p><strong>Last Name:</strong> <?php echo $last; ?></p> 
<p><strong>Email:</strong> <?php echo $email; ?></p> 
<p><strong>Year of Study:</strong> <?php echo $yos; ?></p> 
<p><strong>Faculty:</strong> <?php echo $faculty; ?></p> 
<p><strong>Position:</strong> <?php 
	if ( $position === 'director-of-engagement' ) {
		echo 'Education, Director of Engagement';
	} elseif ( $position === 'director-of-communication' ) {
		echo 'Education, Director of Communication';
	} elseif ( $position === 'director-of-fund-development' ) {
		echo 'Finance, Director of Fund Development';
	} elseif ( $position === 'director-of-corporate-relations' ) {
		echo 'Finance, Director of Corporate Relations';
	} elseif ( $position === 'creative-director' ) {
		echo 'Marketing, Creative Director';
	} elseif ( $position === 'director-of-logistics' ) {
		echo 'Operations, Director of Logistics';
	} elseif ( $position === 'director-of-event-planning' ) {
		echo 'Operations, Director of Event Planning';
	}  
?></p> 
<p>
	<strong>Tell us about something cool you've done in the past 12 months.</strong><br>
	<?php echo $univQ; ?>
</p>
<p><?php 
	if ( $position === 'director-of-engagement' || $position === 'director-of-communication' ) {
		echo '<strong>What do you think your daily activities and challenges will be in this position?</strong><br>';
		echo $question1;
	} elseif ( $position === 'director-of-fund-development' || $position === 'director-of-corporate-relations' ) {
		echo '<strong>In your opinion, what are 2 characteristics of a fitting sponsor for Founders Network and why?</strong><br>';
		echo $question1 . '<br>';
		echo '<strong>Imagine you are the CEO of any existing tech start-up of your choice (some examples include: Shopify, Tilt, Oculus, Better Place, Etsy). If you had the opportunity to persuade an angel-investor to fund your company, how would you entice them to invest?</strong><br>';
		echo $question2;
	} elseif ( $position === 'creative-director' ) {
		echo '<strong>If you were asked to \'sell\' Founders Network, what would you say?</strong><br>';
		echo $question1;
	} elseif ( $position === 'director-of-logistics' || $position === 'director-of-event-planning' ) {
		echo '<strong>What kind of event do you see Founders Network hosting in the coming year? Explain how you would plan this event in  exactly 10 steps.</strong><br>';
		echo $question1;
	} 
?></p> 
<?php if ( $branch == 'marketing' ): ?>
<p><strong>Marketing Portfolio: </strong><a href="http://45.55.62.203/<?php echo $attachmentM; ?>">Click Here</a></p>
<?php endif; ?>
<p><strong>Resume: </strong><a href="http://45.55.62.203/<?php echo $attachment; ?>">Click Here</a></p>

--PHP-alt-<?php echo $random_hash; ?>-- 

--PHP-mixed-<?php echo $random_hash; ?>-- 

<?php
			//copy current buffer contents into $message variable and delete current output buffer 
			$message = ob_get_clean();
			//send the email 
			$mail_sent = @mail( $recruiterEmail, $subject, $message, $headers ); 
			//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
			$mail_sent ? include 'inc/success.php' : include 'inc/mail-fail.php';
		}
	}	
}


function validateFile($file) {
	$fileName = basename($file["name"]);
	$fileType = pathinfo($fileName,PATHINFO_EXTENSION);
	$fileSize = $file["size"];
	if ( $fileType != 'pdf' ) {
		include 'inc/filetype-fail.php';
		return false;
	} elseif ( $fileSize > 5000000 ) { // 20MB
		include 'inc/filesize-fail.php';
		return false;
	} else {
		//echo 'Successfully validated '.$file["name"].'.<br>';
		return true;
	}
}

	
function uploadFile($file) {
	$target_dir = "temp/";
	$target_file = $target_dir . basename($file["name"]);
	if (move_uploaded_file($file["tmp_name"], $target_file)) { // successfully uploaded file
		return true;
	} else {
		include 'inc/upload-fail.php';
	}
}
	
?>