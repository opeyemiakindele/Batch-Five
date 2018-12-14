<?php
include 'db.php';
if ( isset($_REQUEST["resend"])) {
	$email = mysqli_real_escape_string ($conn, mb_strtolower($_REQUEST['email']));
		$statecode = mysqli_real_escape_string ($conn, mb_strtolower($_REQUEST['statecode']));
	$random = mt_rand();
	mysqli_query($conn, "UPDATE `voters` SET vericode='$random' WHERE statecode='$statecode' AND email='$email'");
	
	//email
		$to = "$email";
		$subject = "KCA Verification Code";
		$txt = "Your account has been successfully registered" . "\r\n" . "Verification Code : $random";
		$headers = "From: Celeritas.swift@gmail.com" . "\r\n" .
		"CC: $email";

		if (mail($to,$subject,$txt,$headers)==TRUE){
		header ("location:kca_login.php?success");
		exit();	
		}
	
  header ("location:kca_login.php?reverify&email=$email&statecode=$statecode");
  exit();
}
?>