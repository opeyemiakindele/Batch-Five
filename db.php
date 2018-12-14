<?php
$servername = "localhost";
$usernames = "swiftawa_kca";
$passwords = "Celeritas4u@";
$database = "swiftawa_kca";
// Create connection
$conn = new mysqli($servername, $usernames, $passwords, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




?>