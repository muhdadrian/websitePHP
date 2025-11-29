<?php

$capitals = array("USA" => "Washington D.C.",
 									"Japan" => "Kyoto",
  								"South Korea" => "Seoul",
	 								"India" => "New Delhi");

$capitals = array_flip($capitals); // to flip -- the capitals are the keys, while the countries are the values

foreach($capitals as $key => $value){
	echo "{$key} = {$value} <br>";
}
?>