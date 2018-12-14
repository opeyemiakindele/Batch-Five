<?php 
include 'db.php';

if ( !isset($_REQUEST["email"]) && !isset($_REQUEST["statecode"])) {
  echo "Not Inserted";
  exit();
}


else {
		$email = mysqli_real_escape_string ($conn, mb_strtolower($_REQUEST['email']));
		$statecode = mysqli_real_escape_string ($conn, mb_strtolower($_REQUEST['statecode']));
		$vericode = mysqli_real_escape_string ($conn, mb_strtolower($_REQUEST['vericode']));
		
		
		
		$resultesz = mysqli_query($conn, "SELECT email, statecode, vericode FROM `voters` WHERE email='$email' AND statecode='$statecode'");
		$num_rowsz = mysqli_num_rows($resultesz);
		
		$resultesy = mysqli_query($conn, "SELECT email, statecode, vericode FROM `voters` WHERE email='$email' AND statecode='$statecode' AND vericode='$vericode'");
		$num_rowsy = mysqli_num_rows($resultesy);
		
		$err = "bod";
	}
	if (strlen($statecode)!= 11){
	header ("location:kca_login.php");
	}
	
	if ($num_rowsz == 0) {
	header ("location:kca_login.php?err=$err");
	}	
	
	elseif ($num_rowsy == 0) {
	header ("location:kca_login.php?verifyerror&email=$email&statecode=$statecode");
	}	
	
	
	elseif ($num_rowsy > 0) {
	$after = substr($statecode,7);
	$before = substr($statecode, 0,7);
	$adds = ($after*58403)+47;
	$final = "{$before}{$adds}";
	
	
	header ("location:vote.php?email=$email&hash=$final");
	}	

	
?>