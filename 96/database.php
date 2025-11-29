<?php
	//variables that we need:

	$db_server = "localhost";
	$db_user = "root";
	$db_pass = ""; //we not have password so we leave it empty
	$db_name = "businessdb";
	$conn = ""; //connection

	//to establish connection with MySQL Database
	$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name); //4 arguments in this function

	//if we establish a successful connection, the $conn is technically known as object

	if($conn) {
		echo "You are connected!";
	}
	else {
		echo "Could not connect!";
	}

	//go to localhost/website/97/database.php -> to check if connected

	//if you stopped the MySQL Database connection it will cause 'Fatal error:Uncaught...'
?>