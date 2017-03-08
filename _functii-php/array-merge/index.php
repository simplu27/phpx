<?php

$ar1 = array(
	'nume' => 'Mihaela',
	'varsta' => 23,
	);

$ar2 = array(
	'nume' => 'Gianina',
	'varsta' => 32,
	);

$merge = array_merge($ar1, $ar2);
$combine = array_combine($ar1, $ar2);

$result = array();

foreach ($ar1 as $key => $value) {
	$result[] = $value;
}

foreach ($ar2 as $key => $value) {
	$result[] = $value;
}

echo '<pre>';
	print_r($result);
echo '</pre>';

// echo '<pre>';
// 	print_r($merge);
// echo '</pre>';

// echo '<pre>';
// 	print_r($combine);
// echo '</pre>';
