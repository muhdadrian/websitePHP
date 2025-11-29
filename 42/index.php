<?php

$capitals = array("USA" => "Washington D.C.",
 									"Japan" => "Kyoto",
  								"South Korea" => "Seoul",
	 								"India" => "New Delhi");

$capitals = array_reverse($capitals);

foreach($capitals as $key => $value){
	echo "{$key} = {$value} <br>";
}
?>