<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="post">
		<label>Enter a number to count to:</label><br>
		<input type="text" name="counter"><br>
		<input type="submit" value="start">
	</form>
</body>
</html>

<?php
$counter = $_POST["counter"];

for ($i = 1; $i <= $counter; $i++) {
	echo $i . "<br>";
	//Try to enter no in the box 10, 100 for e.g
}
?>