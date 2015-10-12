<?php
	session_start();
	//session_destroy();
	//var_dump($_SESSION);
	if(isset($_SESSION["errors"]) && !empty($_SESSION["errors"]))
	{
		echo "<div class='errors'>";
		foreach($_SESSION["errors"] as $error)
		{
			echo "<p>" . $error . "</p>";
		}
		echo "</div>";
	}
	else if(isset($_SESSION["success"]))
	{
		echo "<div class='success'>" . $_SESSION["success"] . "</div>";
	}
?>

<html>
	<head>
		<title>Registration without DB</title>
		<link rel="stylesheet" type="text/css" href="style.css.php">
	</head>
	<body>
		<div class="container">
			<h1>Register</h1>
			<form action="process.php" method="post" enctype = "multipart/form-data">
				<input type="hidden" name="action" value="registration">
				<div class="description">
					<p>Email*:</p>
					<p>First Name*:</p>
					<p>Last Name*:</p>
					<p>Password*:</p>
					<p>Confirm Password*:</p>
					<p>Birth Date:</p>
					<p>Profile Picture (optional):</p>
				</div>
				<div class="input">
					<input class="email" type="text" name="email">
					<input class="firstname" type="text" name="first_name">
					<input class="lastname" type="text" name="last_name">
					<input class="password" type="password" name="password">
					<input class="cpassword" type="password" name="c_password">
					<input class="birthdate" type="text" name="birthdate" placeholder="MM/DD/YYYY">
					<input type="file" accept="image/*" name="profilepic">
					<input type="submit" value="Register">
				</div>
			</form>
		</div>
	</body>
</html>