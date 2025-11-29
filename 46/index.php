<?php

$username = "BroCode"; //null, true, false, "", "BroCode" -> only null and not declared variable will return the else echo

if(isset($username)){
	echo "This variable is set";
}
else {
	echo "This variable is NOT set";
}

?>