<?php
	echo "php";

	$fname = $_POST["fName"];
	$lname = $_POST["lName"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$pCode = $_POST["pCode"];
	 
	$emailTo = "chamediwarnasuriya@gmail.com";
	$subject = "SPARKS Residence - Contact Submition";
    $body = "";
    
	// prepare email body text
	$body .= "Name: ";
	$body .= $fname;
	$body .= "\n";
	 
	$body .= "Email: ";
	$body .= $email;
	$body .= "\n";

	$body .= "Phone: ";
	$body .= $phone;
	$body .= "\n";
	 
	$body .= "Post Code: ";
	$body .= $pCode;
	$body .= "\n";
	
	// send email
	$success = mail($emailTo, $subject, $body,"From:".$email);

	// redirect to success page
	if ($success){
	   echo "success";
	}else{
	    echo "invalid";
	}
 
?>