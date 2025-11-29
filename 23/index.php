<?php
// switch = replacement to using many elseif statements more efficient, less code to write

$grade = "A";

if($grade == "A"){
	echo "You did great";
}
elseif($grade == "B"){
	echo "You did good";
}
elseif($grade == "C"){
	echo "You did okay";
}
elseif($grade == "D"){
	echo "You did poorly";
}
elseif($grade == "F"){
	echo "You failed";
}
else {
	echo "{$grade} is not a valid grade";
}

// switch on 24
?>