<?php

$super = array();

$super[] = array(
	'nume' => 'Item nr 1',
	'pret' => 345,
	);

$super[] = array(
	'nume' => 'Item nr 2',
	'pret' => 205,
	);

$super[] = array(
	'nume' => 'Item nr 3',
	'pret' => 305,
	);

$super[] = array(
	'nume' => 'Item nr 4',
	'pret' => 405,
	);

echo "<pre>";
	var_dump($super);
echo "</pre>";

// Functie care verifica daca o anumita valoare este continuta de un array
// Daca este gasita, returneaza true
// Daca valoarea nu exista in array, returneaza false

// http://mkrtchyan.co.uk/checking-if-value-exists-in-a-multidimensional-array-with-php/

function search_in_array($needle, $haystack) {
     if(in_array($needle, $haystack)) {
          return true;
     }
     foreach($haystack as $element) {
          if(is_array($element) && search_in_array($needle, $element))
               return true;
     }
   return false;
}


// if(!search_in_array($value, $array)) {
//      // do something if the given value does not exist in the array
// }

// Valoarea pentru care se face cautarea:
$cauta = $_GET['cauta'];

// http://test-php.dev/search-in-array/index.php?cauta=305

if(search_in_array($cauta, $super)) {
     // do something if the given value does not exist in the array
	echo "<strong>". $cauta ."</strong> a fost gasit";
} else {
	echo "<strong>". $cauta ."</strong> NU a fost gasit";
}

// Info at:
// http://php.net/manual/ro/function.array-search.php

$key = array_search($cauta, array_column($super, 'pret'));

echo "<br>The Key is ". $key . "<hr>";
echo "Nume: " . $super[$key]['nume'] . '<br>';
echo "Pret: " . $super[$key]['pret'] . '<br>';

echo "<hr>";



