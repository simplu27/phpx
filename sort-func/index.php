<?php

$array = array(
	'Lemon' => 23,
	'Apple' => 84,
	'Strawberry' => 14,
	);

asort($array);

foreach ($array as $key => $value) {
	echo $key . ": " . $value ."<br>";
}