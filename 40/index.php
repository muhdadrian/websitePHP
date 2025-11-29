<?php

$capitals = array("USA" => "Washington D.C.",
 									"Japan" => "Kyoto",
  								"South Korea" => "Seoul",
	 								"India" => "New Delhi");

$values = array_values($capitals); // the get the values

foreach($values as $value){
	echo "{$value} <br>";
}
?>