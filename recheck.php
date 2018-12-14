<?php
include 'db.php';

if ((isset($_REQUEST['email'])) && (isset($_REQUEST['statecode'])) ){
$statecode = $_REQUEST['statecode'];
$email = $_REQUEST['email'];

	


$cheverist = mysqli_query($conn, "SELECT filename, filedir FROM imagetab WHERE statecode='$statecode' OR email='$email'");
$imgnumt = mysqli_num_rows($cheverist);
	
	
if ($imgnumt != 2 ) {
		
	header ("Location: gallery.php?statecode=$statecode&email=$email&one_left");
}

else {
	header ("Location: registrations.php?success");
	
}
		
}
?>