<?php
			session_start();
			include('test_input_fct.php');
			include('db_connection.php');
			$nameErr = $passErr = "";
			$name = $pass = "";
			$contor = $err_cont = 0;

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
					$err_cont++;
					log_file($nameErr);
				} else {
					$name = test_input($_POST["name"]);
					
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						$nameErr = "Only letters and white space allowed";
						log_file($nameErr);
						$err_cont++;
					} else {
						$contor++;
					}
				}

				if (empty($_POST["pass"])) {
					$passErr = "Password is required!";
					$err_cont++;
					log_file($passErr);
				} else {
					$pass = test_input($_POST["pass"]);  
					
					if(!preg_match("/.{8,}/",$pass)) {
						$passErr = "Password is to short, 8 characters are required!";
						log_file($passErr);
						$err_cont++;
					} else {
						$contor++;
					}
				}
			}

			if($contor == 2) {			
				$sql = "SELECT Name, Password FROM mygametable WHERE Name='$name' AND Password='$pass'";
				$res = $conn->query($sql);

				if ($res->num_rows) {
					log_file("You are logged in");
				} else {
					log_file("Invalid Name or Password");
					$err_cont++;
				}
				
				if(!$err_cont) {
					log_file("Pass the loggin");
					echo "Pass the loggin";
					
					$_SESSION["name"] = $name;
					header("location=https://mywebpageproject-265710.appspot.com/home.php");
					
					header("Location=https://mywebpageproject-265710.appspot.com/home.php");
				}

				log_file("You are now disconnected from database!");
				$conn->close();
			}
		?>