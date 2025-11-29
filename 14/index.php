<?php
$age = 101;

if ($age >= 100){
	echo "You are too old to enter this site";
}
elseif($age >= 18) {
	echo "You may enter this site";
}
elseif ($age <= 0) {
	echo "That wasn't a valid age";
}

else {
	echo "You must be 18+ to enter";
}
// order is very important, if age >= 18 on the first line, then it will be executed first than the age >= 100 if the age is set to 101 above.
// single = means assigning to a variable
// double == mean comparison
?>

