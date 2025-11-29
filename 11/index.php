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
		<input type="submit" value="total">
	</form>
	
</body>
</html>

<?php

	$x = $_POST["x"];
	$y = $_POST["y"];
	$total = null;

	// $total = pow($x, $y); // 2 to the power of 4 is 16
	// $total = sqrt($x); //sqrt of 100 is 10 -- no need the y | 144 is 12

	echo $total;

?>