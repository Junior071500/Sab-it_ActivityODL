<?php

$cities = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');
 
foreach ($cities as $key => $value) {
	$last = sizeof($cities);	
	echo $value;
	echo ($key == $last - 1) ? "." : ", ";
}
 
echo "";

sort($cities);
echo "";
foreach ($cities as $value) {
	echo " , $value  ";
}
echo "";
 
 
array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
sort($cities);
echo "";
foreach ($cities as $value) {
	echo ", $value ";
}
echo ".";
 
?>