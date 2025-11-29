<?php
// associative array = An array made of key => value pairs

// The e.g of key value pairs
// countries => capitals 
// id => username
// item => price

$capitals = array("USA" => "Washington D.C.",
 									"Japan" => "Kyoto",
  								"South Korea" => "Seoul",
	 								"India" => "New Delhi");

// $capitals["USA"] = "Las Vegas"; //to update key value pair
// $capitals["China"] = "Beijing"; // to add another new key value pair
// array_pop($capitals);
// array_shift($capitals);


foreach($capitals as $key => $value){
	echo "{$key} = {$value} <br>";

}
?>