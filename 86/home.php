<?php
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
	This is the home page <br>
	<a href="index.php">This goes to the login page</a> <br>
</body>
</html>

<?php
	echo $_SESSION["username"] . "<br>"; 
	echo $_SESSION["password"] . "<br>"; 
	// All these will result to switch from login to homepage and vice versa when we clicked the link in the browser.
	// We can access to our session variable from either page 
?>