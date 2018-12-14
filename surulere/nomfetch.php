<?php
include 'db.php';
$output='';

$sql = "SELECT * FROM `nominee` WHERE name LIKE '%".$_POST["name"]."%' 
	 OR id LIKE '%".$_POST["name"]."%' OR awardcategories LIKE '%".$_POST["name"]."%' OR email LIKE '%".$_POST["name"]."%' OR statecode LIKE '%".$_POST["name"]."%' OR phone LIKE '%".$_POST["name"]."%'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
		$output .= '<h4 align="center">Search Result</h4>';
		$output .= '<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Award Category</th>
				<th>State Code</th>
				<th>Email Address</th>
				<th>Phone No</th>
				<th>Nominator</th>
				<th>Date</th>
				</tr>';
		while ($row = mysqli_fetch_array($result)){
		$output .= '
			<tr>
			<td>'.$row["id"].'</td>
			<td>'.$row["name"].'</td>
			<td>'.$row["awardcategories"].'</td>
			<td>'.$row["statecode"].'</td>
			<td>'.$row["email"].'</td>
			<td>'.$row["phone"].'</td>
			<td>'.$row["nominatorstatecode"].'</td>
			<td>'.$row["date"].'</td>
			</tr>
		';
		
		
		}
	echo $output;
		}
	else{
		echo "<center><h1 style='color:grey;'>Data not found</h1></center>";
	}

?>