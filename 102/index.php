<?php
include("database.php");

$username = "Patrick";
$password = "rock3";
//use hash in the password for security
$hash =  password_hash($password, PASSWORD_DEFAULT); //PASSWORD_DEFAULT is an option for algorithm technically we're using the bcrypt algorithm, which is the current default

$sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

try {
	mysqli_query($conn, $sql);
	echo "User is now registered";
}
catch (mysqli_sql_exception){
	echo "Could not register user";
}

mysqli_close($conn);
?>