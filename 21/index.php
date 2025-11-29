<?php
	$age = 18;
	$citizen = true; 

	if(!$age >= 18 || !$citizen) {
		echo "You cannot vote";
	}
	else {
		echo "You can vote";
	}
	// better stick with the previous example at 20 for easier to read
	// not logical and or operator at above
?>