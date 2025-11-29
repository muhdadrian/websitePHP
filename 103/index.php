<?php
// to retrieve a row from mysql database by using php

include("database.php");

//below is sql query
$sql = "SELECT * FROM users WHERE user = 'Spongebob'"; //try to change this username to other than those listed in DB, the else echo below will be printed
$result = mysqli_query($conn, $sql); //technically, $result is an object containing array

if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_assoc($result);
	echo $row["id"] . "<br>";
	echo $row["user"] . "<br>";
	echo $row["reg_date"] . "<br>";
}
else {
	echo "No user found";
}

mysqli_close($conn);
?>