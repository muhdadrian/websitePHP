<?php
	function is_even($number) {
		$result = $number % 2;
		return $result;
	}

	echo is_even(2);
	//if the number is even the resut will be 0, if odd is 1
?>