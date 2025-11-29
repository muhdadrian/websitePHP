<?php
// Logical operators = combine conditional statements
// if(condition1 && condition2)
// if(condition1 || condition2)
// if(!condition1)

// && = True if both conditions are true
// || = True if at least one condition is true
// ! = True if false. False if true

$temp = 15;

if($temp >= 0 && $temp <= 30) {
	echo "The weather is good.";
}
else {
	echo " The weather is bad.";
}


?>