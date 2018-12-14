<?php
include 'db.php';

$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'assets/custom/img/16A';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $Filenam =  $_FILES['file']['name'];  //5
	
    $targetFile =  $targetPath. $_FILES['file']['name'];  //6
 
    move_uploaded_file($tempFile,$targetFile); //7
     
}


if ((isset($_REQUEST['email'])) && isset($_REQUEST['statecode']) ){
$email = $_REQUEST['email'];
$statecode = $_REQUEST['statecode'];
$date = date("F j, Y, g:i a");

$cheveri = mysqli_query($conn, "SELECT email, statecode FROM verification WHERE email='$email' OR statecode='$statecode'");
$num_veri = mysqli_num_rows($cheveri);


if ($num_veri > 0) {
	
	$cheveris = mysqli_query($conn, "SELECT filename, filedir FROM imagetab WHERE email='$email' OR statecode='$statecode'");
	$imgnum = mysqli_num_rows($cheveris);
	
	
	if ($imgnum != 2 ) {
		$targetFiler = "assets/custom/img/16A/" . $Filenam;
		
		$fileupload = mysqli_query($conn, "INSERT INTO `imagetab` VALUES('','$email','$statecode','$Filenam','$targetFiler','$date')");
		}
		
	else {
		if(isset($email)){
		$mailTo = "$email";
		$subject = "KCA Nominee Verification 2018";
		$body = "Kwara Corpers Award 2018 Nominee Verification
		<br><br>
		Congratulations, You ( ".$name." ) are fully qualified for the Kwara Corpers Awards 2018. <br>
		Verification Successful<br>
		Thanks, more info about the award will be forwarded to you later.";	
		$headers = "To: verification <".$mailTo.">\r\n";
		$headers .= "From: ".$host." <".$mailTo.">\r\n";
		$headers .= "Content-Type: text/html";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);		
		}
	}
	
	}
	

}
?> 