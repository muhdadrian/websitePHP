<?php
	$db_server = "localhost";
	$db_user = "root";
	$db_pass = ""; 
	$db_name = "businessdb";
	$conn = "";

try {
	$conn = mysqli_connect($db_server, 	$db_user, $db_pass, $db_name);
}
catch(mysqli_sql_exception) {
	echo "Could not connect! <br>";
}

	if($conn) {
		echo "You are connected! <br>";
	} //technically it's not necessary to tell the users that you are connected with the database.
	//we write the code if($conn) above for testing purposes
	//please refer to 99 

	//try and catch will prevent the big mess of Fatal error from being displayed to make it more obvious what is happening.

	//try to start the MySQL Database once again

?>