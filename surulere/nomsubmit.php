<?php
			include 'db.php';


			$nomname = mysqli_real_escape_string ($conn, $_REQUEST['nomname']);
			$nomcat = mysqli_real_escape_string ($conn, $_REQUEST['nomcat']);
			$nomstatecode = mysqli_real_escape_string ($conn, $_REQUEST['nomstatecode']);
			$nomemail = mysqli_real_escape_string ($conn, $_REQUEST['nomemail']);
			$nomphone = mysqli_real_escape_string ($conn, $_REQUEST['nomphone']);
			
			$nomrname = mysqli_real_escape_string ($conn, $_REQUEST['nomrname']);
			$nomrstatecode = mysqli_real_escape_string ($conn, $_REQUEST['nomrstatecode']);
			$nomremail = mysqli_real_escape_string ($conn, $_REQUEST['nomremail']);
			$nomrphoneno = mysqli_real_escape_string ($conn, $_REQUEST['nomrphoneno']);
			$date = date("F j, Y, g:i a");
			$host = "KCA Awards 2018";


				
			$nomregister = "INSERT INTO `nominee` VALUES('','$nomname','$nomcat','$nomstatecode','$nomemail','$nomphone','$nomrstatecode','$date')";
			$register_nom = mysqli_query($conn, $nomregister);
			
			if($register_nom==TRUE){
				$nomrregister = "INSERT INTO `nominator` VALUES('','$nomrname','$nomrstatecode','$nomremail','$nomrphoneno','$nomstatecode','$date')";
				$register_nomr = mysqli_query($conn, $nomrregister);
				
				if($register_nomr==TRUE){
					
					if(isset($nomemail)){
		$mailTo = "$nomremail";
		$subject = "KCA Nomination 2018";
		$body = "Kwara Corpers Award 2018 Nomination
		<br><br>
		You ( ".$mailTo." ) have successfully nominate ".$nomname." ( ".$nomstatecode." ) as ".$nomcat." for the Kwara Corpers Awards 2018. <br>
		Thanks, more info about the award will be forwarded to you later.";	
		$headers = "To: nominate <".$mailTo.">\r\n";
		$headers .= "From: ".$host." <".$mailTo.">\r\n";
		$headers .= "Content-Type: text/html";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);		
		}
					
				}
				
				
				header("Location: nominate?success");
			}
			
			else {
				header("Location: nominate?error");
			}
			
			

?>