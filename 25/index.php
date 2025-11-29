
<?php
 // $date = date("l");
 // echo $date;
 // Above is for testing day for today

 $date = date("l");
 $date = "Sunday";

 switch($date) {
	case "Monday";
		echo "It's Monday";
		break;
	case "Tuesday";
		echo "It's Tuesday";
		break;
	case "Wednesday";
		echo "It's Wednesday";
		break;
	case "Thursday";
		echo "It's Thursday";
		break;
	case "Friday";
		echo "It's Friday";
		break;
	case "Saturday";
		echo "It's Saturday";
		break;
	case "Sunday";
		echo "It's Sunday";
		break;
	default:
	echo "{$date} is not a day";
 }

 //using switch is recommended if you are checking some value or variable many times over
?>