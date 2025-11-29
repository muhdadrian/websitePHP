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
	This is the login page <br>
	<a href="home.php">This goes to the homepage</a> <br>
</body>
</html>

<?php
	$_SESSION["username"] = "BroCode";
	$_SESSION["password"] = "pizza123";

	//for testing purposes let's echo
	echo $_SESSION["username"] . "<br>"; 
	echo $_SESSION["password"] . "<br>"; 
?>