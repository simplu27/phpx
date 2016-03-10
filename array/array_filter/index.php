<?php

$a = array(
	1 => 'Unu',
	0 => '',
	'false' => false,
	'nul' => null,
	"negative" => "-3",
	"integer" => -3,
	'zero' => 0,
	'true' => true
	);

$filtru = array_filter($a);

echo "<pre>";
	var_dump($filtru);
echo "</pre>";

/* 
Inlatura valorile nule, null, false, zero

array (size=4)
  1 => string 'Unu' (length=3)
  'negative' => string '-3' (length=2)
  'integer' => int -3
  'true' => boolean true
*/

////////////////////////////////////////////////////

// If you want a quick way to remove NULL,
// FALSE and Empty Strings (""), but leave values of 0 (zero),
// you can use the standard php function strlen as the callback function:

// removes all NULL, FALSE and Empty Strings but leaves 0 (zero) values
$filtru2 = array_filter($a, 'strlen');

echo "<pre>";
	var_dump($filtru2);
echo "</pre>";

/*
array (size=5)
  1 => string 'Unu' (length=3)
  'negative' => string '-3' (length=2)
  'integer' => int -3
  'zero' => int 0
  'true' => boolean true
*/