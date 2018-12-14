<?php
include 'db.php';


$nomname = mysqli_real_escape_string ($conn, $_REQUEST['nomname']);
$awacategory = mysqli_real_escape_string ($conn, $_REQUEST['awacategory']);
$details = mysqli_real_escape_string ($conn, $_REQUEST['details']);
$username = mysqli_real_escape_string ($conn, $_REQUEST['username']);
$statecode = mysqli_real_escape_string ($conn, $_REQUEST['statecode']);
$phoneno = mysqli_real_escape_string ($conn, $_REQUEST['phoneno']);
$email = mysqli_real_escape_string ($conn, $_REQUEST['email']);
$date = mysqli_real_escape_string ($conn, $_REQUEST['date']);


				if (strlen($phoneno)!= 13) {
					
					$errorser = "Phone No is incorrect";
			header ("location:society.php?alert=$errorser");
					
				}
				
				elseif (strlen($statecode)!= 11){
					$errorser = "State Code is incorrect";
			header ("location:society.php?alert=$errorser");	
				}
				
				elseif (strlen($username) < 5){
					$errorser = "Username must be more than 5 characters";
			header ("location:society.php?alert=$errorser");	
				}
				
				else {
				
				$register = "INSERT INTO `society` VALUES('','$nomname','$awacategory','$details','$username','$statecode','$phoneno','$email','$date')";
			$register_veri = mysqli_query($conn, $register);
			$succer = "Nomination Successfull";
			header ("location:society.php?success=$succer");	
			
			
				}

?>