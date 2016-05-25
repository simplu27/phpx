<?php

// list() function
// (PHP 4, PHP 5, PHP 7)
// list — Assign variables as if they were an array
// array list ( mixed $var1 [, mixed $... ] )
// Like array(), this is not really a function, but a language construct. list() is used to assign a list of variables in one operation. 

// Valorile întoarse: Returns the assigned array.

$my_array = array("Dog","Cat","Horse");

echo "<pre>";
	var_dump($my_array);
echo "</pre>";

list($a, $b, $c) = $my_array;



echo "I have several animals, a $a, a $b and a $c.";
echo "<pre>";
	var_dump($my_array);
echo "</pre>";