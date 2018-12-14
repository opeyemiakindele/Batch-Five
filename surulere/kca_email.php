<?php
include 'db.php';
session_start();
if(isset($_REQUEST["true"])){
	$cookname = $_SESSION['name'];
	$cookemail = $_SESSION['email'];
	$cookstatecode = $_SESSION['statecode'];
		mysqli_query($conn, "INSERT INTO `voters` VALUES('','$cookname','$cookstatecode','$cookemail','Yes','1')");
		header ("location:kca_login.php");
		exit();
}

?>