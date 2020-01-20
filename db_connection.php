<?php
	include('log_fct.php');
	$dbhost = "10.10.69.221";
	$dbuser = "root";
	$dbpass = "";
	$db = "twdatabase";

	$conn = new mysqli('mywebpageproject-265710:us-central1:mywebappdb', 'root', 'user1234', 'mywebappdb', 3306);

	if ($conn->connect_errno) {
		log_file("Connection failed: " . $conn->connect_error);
		die("Connection failed: " . $conn->connect_error);
	} else {
		log_file("You are now connected to database!");
	}
?>
