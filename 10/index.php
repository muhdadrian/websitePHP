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
		<input type="text" name="x">
		<input type="submit" value="total">
	</form>
	
</body>
</html>

<?php
	$x = $_POST["x"];
	$total = null;

	// $total = abs($x); //abs will return -4 to 4 (positive)
	// $total = round($x); // 3.14 rounded is 3 | 3.99 is 4
	// $total = floor($x); // floor to always round down -> 3.99 is 3
	$total = ceil($x); //ceil will always round up, 3.14 is 4 | 4.14 is 5


	echo $total;
?>