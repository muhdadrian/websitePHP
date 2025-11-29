<?php
// variable = a reusable container that holds data string, integer, float, boolean

	$name = "Bro Code";
	$food = "pizza";
	$email = "fake123@gmail.com";

	$age = 21;
	$users = 2;
	$quantity = 4; // change to 4, the rest will be updated automatically

	$gpa = 2.5;
	$price = 4.99; // try to change to 5.99
	$tax_rate = 5.1;

	$employed = true; // employed or not
	$online = false; // online or not
	$for_sale = true; // for sale or not

	$total = null;

	echo "You have ordered {$quantity} x {$food}s <br>";
	$total = $quantity * $price; // reassign the total
	echo "Your total is: \${$total}";	
	
?>

