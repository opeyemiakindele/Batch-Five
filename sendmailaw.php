<?php
include 'db.php';


$name = mysqli_real_escape_string ($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string ($conn, $_REQUEST['email']);
$phoneno = mysqli_real_escape_string ($conn, $_REQUEST['phoneno']);
$details = mysqli_real_escape_string ($conn, $_REQUEST['details']);

$to = "producer@swiftawards.com.ng";
$subject = "Swiftawards Contact Service";
$txt = "$details";
$headers = "From: producer@swiftawards.com.ng" . "\r\n" .
"CC: $email";

if (mail($to,$subject,$txt,$headers)==TRUE){
echo "Email sent successful";	
}


 
 

?>