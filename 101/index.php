<?php
include("database.php");

//to register new user using method below

$username = "Squidward";
$password = "clarinet2";

$sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')";

try {
	mysqli_query($conn, $sql);
	echo "User is now registered";
}
catch (mysqli_sql_exception){
	echo "Could not register user";
}

mysqli_close($conn);
?>