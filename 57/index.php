<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="post">
		<input type="checkbox" name="pizza" value="Pizza">
		Pizza <br>
		<input type="checkbox" name="salad" value="Salad">
		Salad <br>
		<input type="checkbox" name="burger" value="Burger">
		Burger <br>
		<input type="checkbox" name="soto" value="Soto">
		Soto <br>
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php
	if(isset($_POST["submit"])){

		if(isset($_POST["pizza"])){
			echo "You like pizza! <br>";
		}
		if(isset($_POST["salad"])){
			echo "You like salad! <br>";
		}
		if(isset($_POST["burger"])){
			echo "You like burger! <br>";
		}
		if(isset($_POST["soto"])){
			echo "You like soto! <br>";
		}
		if(empty($_POST["pizza"])){
			echo "You DON'T like pizza! <br>";
		}
		if(empty($_POST["salad"])){
			echo "You DON'T like salad! <br>";
		}
		if(empty($_POST["burger"])){
			echo "You DON'T like burger! <br>";
		}
		if(empty($_POST["soto"])){
			echo "You DON'T like soto! <br>";
		}
	}
?>