<?php
	include('log_fct.php');
	$dbhost = "10.10.69.221";
	$dbuser = "root";
	$dbpass = "";
	$db = "twdatabase";

	$conn = new mysqli('35.202.125.179', 'root', 'user1234', 'mywebappdb');

	if ($conn->connect_errno) {
		log_file("Connection failed: " . $conn->connect_error);
		die("Connection failed: " . $conn->connect_error);
	} else {
		log_file("You are now connected to database!");
	}
?>
