<?php 
include 'db.php';
session_start();
if ( !isset($_REQUEST["name"]) && empty($_REQUEST["name"]) && empty($_REQUEST["email"]) && empty($_REQUEST["statecode"])) {
  echo "Not Inserted";
  exit();
}

else {
		$name = mysqli_real_escape_string ($conn, mb_strtolower($_REQUEST['name']));
		$email = mysqli_real_escape_string ($conn, mb_strtolower($_REQUEST['email']));
		$statecode = mysqli_real_escape_string ($conn, mb_strtolower($_REQUEST['statecode']));
		
		$resultesy = mysqli_query($conn, "SELECT email, statecode FROM `voters` WHERE email='$email' OR statecode='$statecode'");
		$num_rowsy = mysqli_num_rows($resultesy);
		$err = "bod";
		
		$random = mt_rand();
		
}

	if (strlen($name) < 10){
	header ("location:kca_em.php");
	}	

	elseif (strlen($statecode)!= 11){
	header ("location:kca_em.php");
	}
	
	elseif ($num_rowsy > 0) {
	header ("location:kca_em.php?alert");
	}	
	
	else{
		
		mysqli_query($conn, "INSERT INTO `voters` VALUES('','$name','$statecode','$email','$random','1')");
		
		$to = "$email";
		$subject = "KCA Verification Code";
				$txt = "Your account has been successfully registered" . "\r\n" . "Verification Code : $random";
		$headers = "From: Celeritas.swift@gmail.com" . "\r\n" .
		"CC: $email";

		if (mail($to,$subject,$txt,$headers)==TRUE){
		header ("location:kca_login.php?success");
		exit();	
		}
		
		
	}
	
?>