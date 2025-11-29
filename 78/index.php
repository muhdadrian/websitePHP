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
		age:<br>
		<input type="text" name="age"><br>
		email:<br>
		<input type="text" name="email"><br>
		<input type="submit" name="login" value="login">

	</form>
	
</body>
</html>

<?php
if(isset($_POST["login"])){

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);//INPUT_GET if you're using get in the method.

	$age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

	//echo "You are {$age} years old"; //try type rorkffk67ksks -> it will filter all characters beside number 67.

	echo "Your email is: {$email}";// try type this: <BroCode@gmail.com>() --> result without all those illegal chars --> Your email is: BroCode@gmail.com
}
?>

