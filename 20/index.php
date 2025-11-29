<?php
	$age = 25;
	$citizen = true; // false for not citizen

	if($age >= 18 && $citizen) {
		echo "You can vote";
	}
	else {
		echo "You cannot vote";
	}
?>