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
//to validate
//name in the input inside HTML that is filtered
if(isset($_POST["login"])){
	$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

	$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

	if(empty($email)){
		echo "That email wasn't valid"; //tyr <dhdhdh@yahoo.com>
	}
	else {
		echo "Your email is: {$email}";
	}
}
// it's a good idea to both sanitize and filter user input just in case user type some malicious script
?>

