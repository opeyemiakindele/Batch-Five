<?php
include 'db.php';
		
		// Get the Visitor state code
		$vcodenom = $_REQUEST["vcodenom"];
		
		// Add a vote to the nomineee table
		$notesuccess = mysqli_query($conn, "UPDATE `voters` SET awaid = awaid + 1 WHERE statecode='$vcodenom'");
		
		if($notesuccess==TRUE){
		header("location:updates.php?statecodemk=$vcodenom");
		}
		?>