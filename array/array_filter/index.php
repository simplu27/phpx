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

echo "<h2>array_filter()</h2>";

echo "Array initial <br>";
var_dump($a);

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


echo "<hr>";
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

echo "<hr>";
////////////////////////////////////////////////////

// The array_filter() function filters
// the values of an array using a callback function.

// Returneaza doar impar
function test_odd($var) {
		return($var & 1);
	}

// Returneaza doar par
	function test_evan($var) {
		return(!($var & 1));
	}

$a1=array("a","b",2,3,4);

echo "Array initial: <br>";
var_dump($a1);

var_dump(array_filter($a1,"test_odd"));
// Return Array ( [3] => 3 ) 

echo '<br>';

var_dump(array_filter($a1,"test_evan"));
// Returneaza Array ( [0] => a [1] => b [2] => 2 [4] => 4 ) 