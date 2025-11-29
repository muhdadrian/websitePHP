<?php
	$hours = 50; //standard hours is 40 for e.g
	$rate = 15;
	$weekly_pay = null;

	if($hours <= 0) { //-1, -10 the result will be zero
		$weekly_pay = 0;
	}

	elseif ($hours <= 40) {
		$weekly_pay = $hours * $rate;
	}
	else {
		$weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5)); //OT pay
	}

	echo "You made \${$weekly_pay} this week";
?>