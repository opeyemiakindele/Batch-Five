<?php
include 'db.php';


$selected = mysqli_real_escape_string ($conn, $_REQUEST['selected']);


if ($selected == "society"){
	header ("location:society.php");
}

if ($selected == "corpsmember"){
	header ("location:corpsmember.php");
}
?>