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
		<input type="submit" name="login" value="login">

	</form>
</body>
</html>

<?php
if(isset($_POST["login"])){

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

	echo "Hello {$username}";

// use filter to filter the input

// right click and click: View Page Source -> 	The '<script>alert("You have a VIRUS!");</script>' is put below the HTML, which means that it will not be executed instead of printed as output below the login.

//The special characters in the JS Code are being replaced due to the filter.

//If you want to filter all characters besides number use FILTER_SANITIZE_NUMBER_INT

}
?>