<?php
	$child = false; // true -> $10
	$senior = false; // true -> $10
	$ticket = null;

	if($child || $senior) {
		$ticket = 10;
	}
	else {
		$ticket = 15;
	}

	echo "The ticket price is \${$ticket}";
?>