<?php
// variable = a reusable container that holds data string, integer, float, boolean

	$name = "Bro Code";
	$food = "pizza";
	$email = "fake123@gmail.com";

	$age = 21;
	$users = 2;
	$quantity = 3;

	$gpa = 2.5;
	$price = 4.99;
	$tax_rate = 5.1;

	$employed = true; // employed or not
	$online = false; // online or not --> if false no number, if it's true 1
	$for_sale = true; // for sale or not

	echo "Hello {$name}<br>";
	echo "You like {$food}<br>";
	echo "Your email is {$email}<br><br>";
	
	echo "You are {$age} years old<br>";
	echo "There are {$users} users online<br>";
	echo "You would like to buy {$quantity} items<br><br>";

	echo "Your gpa is: {$gpa}<br>";
	echo "Your pizza is \${$price}<br>";
	echo "The sales tax rate is: {$tax_rate}%<br><br>";

	echo "Online status: {$online}<br>";
?>

