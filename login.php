<!DOCTYPE HTML>  
<html>
	<head>
		<meta charset="utf-8"/>	
		<link rel="stylesheet" href="login.css" />	
		<style>
			.error {color: #FF0000;

                   

			}
		</style>
		<title>Login</title>
	</head>
	
	<body background="space.png">  
		<h2>Login window:</h2>
		
		<form method="post" action="check_login.php">  
			Name: <input type="text" name="name" value="<?php echo $name;?>">
				<span class="error">* <?php echo $nameErr;?></span>
				<br><br>
				
			Password: <input type="password" name="pass" value="<?php echo $pass;?>">
				<span class="error">* <?php echo $passErr;?></span>
				<br><br>
				
			<input type="submit" name="submit" value="Login">  
		</form>
		<br>
		<form method="POST" action="forgot_pass.php">
			<input type="submit" name="forgot_pass" value="Forgot password"> 
		</form>
		<br>

		<form method="post" action="reset_pass.php">
			<input type="submit" name="reset_btn" value="Reset password">
		</form>
		<br>
		<form method="post" action="index.php">
			<input type="submit" name="submit" value="Go back">  
		</form>

	</body>
</html>
