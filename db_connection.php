<?php
	include('log_fct.php');
	$dbhost = "10.10.69.221";
	$dbuser = "root";
	$dbpass = "";
	$db = "twdatabase";

	$conn = new mysqli('mywebappdb.cs9uu9xa2wuc.ap-northeast-1.rds.amazonaws.com', 'user', 'user1234', 'mywebappdb', '3306');

	if ($conn->connect_errno) {
		log_file("Connection failed: " . $conn->connect_error);
		die("Connection failed: " . $conn->connect_error);
	} else {
		log_file("You are now connected to database!");
	}
?>