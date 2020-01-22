<?php
	include('log_fct.php');

	$dbSocket = '/cloudsql/rugged-truck-265912:us-central1:root';
	$conn = new mysqli(null, 'root', 'user1234', 'mywebappdb', null, $dbSocket);

	if ($conn->connect_errno) {
		log_file("Connection failed: " . $conn->connect_error);
		die("Connection failed: " . $conn->connect_error);
	} else {
		log_file("You are now connected to database!");
		echo "You are now connected to database!";
	}
?>
