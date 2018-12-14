<?php
include 'db.php';
		
		// Get the Nominee state code
		$scodenom = $_POST["scodenom"];
		
		// Get the Visitor state code
		$vcodenom = $_POST["vcodenom"];
		
		// Get the Nominee votes state code
		$notenom = $_POST["notenom"];
		
		// Get the Nominee total votes state code
		$notenomadd = $notenom + 1;
		
		// Get the  Visitor award Category ID
		$votenom = $_POST["votenom"];
		
		// Get the Nominee total votes state code
		$votenomadd = $votenom + 1;
		
		// Add a vote to the nomineee table
		$notesuccess = mysqli_query($conn, "UPDATE `nomreg` SET votes='$notenomadd' WHERE statecode='$scodenom'");
		
		// Add 1 to the voters awaid table to keep track of the award category
		$votesuccess = mysqli_query($conn, "UPDATE `voters` SET awaid='$votenomadd' WHERE statecode='$vcodenom'");
		
		// Fetch The Nominee details
		$sqltabs = "SELECT DISTINCT * FROM `nomreg` WHERE statecode='$scodenom'";
		$resultabs = mysqli_query($conn, $sqltabs);
		$rowtabs = mysqli_fetch_assoc($resultabs);
		$nametabs=$rowtabs["name"];
		
		// Fetch The Voter details
		$sqltabz = "SELECT DISTINCT * FROM `voters` WHERE statecode='$vcodenom'";
		$resultabz = mysqli_query($conn, $sqltabz);
		$rowtabz = mysqli_fetch_assoc($resultabz);
		$nametabz=$rowtabz["name"];
		
		// Record Vote Data
		mysqli_query($conn, "INSERT INTO `votes` VALUES('','$nametabs','$scodenom','$nametabz','$vcodenom')");
		
		if( ($notesuccess==TRUE) && ($votesuccess==TRUE) ){
		header("location:updates.php?statecodemk=$vcodenom");
		}
			
?>