<?php

$capitals = array("USA" => "Washington D.C.",
 									"Japan" => "Kyoto",
  								"South Korea" => "Seoul",
	 								"India" => "New Delhi");

$keys = array_keys($capitals); // the get the keys

foreach($keys as $key){
	echo "{$key} <br>";
}
?>