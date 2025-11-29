<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="post">
		<label>x:</label>
		<input type="text" name="x"><br>
		<label>y:</label>
		<input type="text" name="y"><br>
		<label>z:</label>
		<input type="text" name="z"><br>
		<input type="submit" value="total">
	</form>
	
</body>
</html>

<?php

	$x = $_POST["x"];
	$y = $_POST["y"];
	$z = $_POST["z"];
	$total = null;

	// $total = max($x, $y, $z); // what is the max no. between x, y, z
	// $total = min($x, $y, $z);
	// $total = pi(); // it will print automatically after saving the file
	// $total = rand();
	// $total = rand(1,10); // random no. between 1 and 10

	echo $total;

?>