<?php 
include 'db.php';


		$name = mysqli_real_escape_string ($conn, $_REQUEST['name']);
		$email = mysqli_real_escape_string ($conn, $_REQUEST['email']);
		$statecode = mysqli_real_escape_string ($conn, $_REQUEST['statecode']);
		$phoneno = mysqli_real_escape_string ($conn, $_REQUEST['phoneno']);
		$awacat = mysqli_real_escape_string ($conn, $_REQUEST['nomcat']);
		$date = date("F j, Y, g:i a");
		$host = "KCA Awards 2018";
		
		$resultes = mysqli_query($conn, "SELECT email, statecode FROM nominee WHERE email='$email' OR statecode='$statecode'");
		$num_rows = mysqli_num_rows($resultes);
		
		
		$cheveri = mysqli_query($conn, "SELECT email, statecode FROM verification WHERE email='$email' OR statecode='$statecode'");
		$num_veri = mysqli_num_rows($cheveri);
		
	
	if ($num_rows === 0) {
	$errorser = "Sorry, You were not nominated for the award";
	header ("location:registrations.php?alert=$errorser");
	}	
	
	elseif ($num_veri > 0) {
	$errorser = "Your details have been registered already.";
	header ("location:registrations.php?alert=$errorser");
	}
	
else {
	
	
		$nomregister = "INSERT INTO `verification` VALUES('','$name','$awacat','$statecode','$email','$phoneno','$date')";
			$register_nom = mysqli_query($conn, $nomregister);
			
			
				if($register_nom==TRUE){
			header("Location: gallery.php?email=$email&statecode=$statecode");
					
				}
			
				
			else {
				header("Location: registrations.php?error");
			}
	
	
	}

?>