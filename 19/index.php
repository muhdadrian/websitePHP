<?php

$temp = 15;
$cloudy = true;

if($temp < 0 || $temp > 30) {
	echo "The weather is bad.<br>";
}
else {
	echo " The weather is good.<br>";
}

/*
if ($cloudy) // or $cloudy == true
{ 
	echo "It's cloudy";
}
else {
	echo "It's sunny";
}
*/
if (!$cloudy)
{ 
	echo "It's sunny";
}
else {
	echo "It's cloudy";
}
?>