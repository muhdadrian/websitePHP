<?php
	$username = "Bro Code";

	// $username = strtolower($username);
	//$username = strtoupper($username);
	//$username = trim($username); //trim to remove the white space before and after the username for e.g: "  Bro Code  "
	//$username = str_pad($username, 20, "0"); // 0-, /, etc
	//$username = strrev($username);
	$username = str_shuffle($username);

	echo $username;
?>