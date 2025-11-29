<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="post">
		<label>radius:</label><br>
		<input type="text" name="radius"><br>
		<input type="submit" value="calculate"> 
	</form><br>
</body>
</html>

<?php
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2); // round to 2 decimal numbers

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference = {$circumference}cm <br>";
echo "Area = {$area}cm^2 <br>"; //cm^2 centimeter square
echo "Volume = {$volume}cm^3 <br>"; //centimeter cube
?>