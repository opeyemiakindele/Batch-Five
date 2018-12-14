<?php
include 'db.php';
$output='';

$sql = "SELECT * FROM `corp` WHERE nomname LIKE '%".$_POST["name"]."%' 
	 OR awardcategory LIKE '%".$_POST["name"]."%' OR email LIKE '%".$_POST["name"]."%' OR statecode LIKE '%".$_POST["name"]."%' OR phoneno LIKE '%".$_POST["name"]."%'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0){
		$output .= '<h4 align="center">Search Result</h4>';
		$output .= '<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
				<th>Id</th>
				<th>Nominee Name</th>
				<th>Award Category</th>
				<th>State Code</th>
				<th>Email Address</th>
				<th>Phone No</th>
				</tr>';
		while ($row = mysqli_fetch_array($result)){
		$output .= '
			<tr>
			<td>'.$row["id"].'</td>
			<td>'.$row["nomname"].'</td>
			<td>'.$row["awardcategory"].'</td>
			<td>'.$row["statecode"].'</td>
			<td>'.$row["email"].'</td>
			<td>'.$row["phoneno"].'</td>
			</tr>
		';
		
		
		}
	echo $output;
		}
	else{
		echo "<center><h1 style='color:grey;'>Data not found</h1></center>";
	}

?>