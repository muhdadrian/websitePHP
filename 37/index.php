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
						
// echo $capitals["USA"];
// echo $capitals["Japan"];

foreach($capitals as $key => $value){
	echo "{$key} = {$value} <br>";

}
?>