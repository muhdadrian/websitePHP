<?php
/*
session = Super Global Variable (SGB) used to store information on a user to be used across multiple pages. A user is assigned a session-id for e.g in login credentials
*/
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="index.php" method="post">
	username:<br>
	<input type="text" name="username"><br>
	password:<br>
	<input type="password" name="password"><br>
	<input type="submit" name="login" value="login">
</form>
</body>
</html>

<?php
	if(isset($_POST["login"])){

		if(!empty($_POST["username"]) &&
		!empty($_POST["password"])){

			$_SESSION["username"] = $_POST["username"];
			$_SESSION["password"] = $_POST["password"];

			//the echo below for testing purpose only
			//echo $_SESSION["username"] . "<br>";
			//echo $_SESSION["password"] . "<br>";
			//If either username or password is empty the else statement below will be executed. If both are filled then both username and password will be shown.
		}
		else {
			echo "Missing username/password <br>";
		}
	}

// next go to 89
?>