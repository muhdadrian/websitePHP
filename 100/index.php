<?php
include("database.php");

//let say we forgot to input the password, then we'll get fatal error
//we can surrounded our query with try and catch block to handle the fatal error
$sql = "INSERT INTO users (user, password) VALUES ('Spongebob')";

try {
	mysqli_query($conn, $sql);
	echo "User is now registered";
}
catch (mysqli_sql_exception){
	echo "Could not register user";
}

mysqli_close($conn);
?>