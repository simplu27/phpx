<?php
// Pagina de test pentru functia array_search
// array_search — Searches the array for a given value and returns the corresponding key if successful
// mixed array_search ( ce-se-cauta , array $in-ce-se-cauta [, bool $strict = false ] )

/*
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;


Exemplu pentru multiarray
array_search cu array_column
array_column — Return the values from a single column in the input array

$userdb=Array
(
    (0) => Array
        (
            (uid) => '100',
            (name) => 'Sandra Shush',
            (url) => 'urlof100'
        ),

    (1) => Array
        (
            (uid) => '5465',
            (name) => 'Stefanie Mcmohn',
            (pic_square) => 'urlof100'
        ),

    (2) => Array
        (
            (uid) => '40489',
            (name) => 'Michael',
            (pic_square) => 'urlof40489'
        )
);

$key = array_search(40489, array_column($userdb, 'uid'));

echo $key; // return 2

*/

$userdb=Array
(
    0 => Array
        (
            "uid" => '100',
            "name" => 'Sandra Shush',
            "url" => 'urlof100'
        ),

    1 => Array
        (
            "uid" => '54',
            "name" => 'Stefanie Mcmohn',
            "pic_square" => 'urlof100'
        ),

    2 => Array
        (
            "uid" => '404',
            "name" => 'Michael',
            "pic_square" => 'urlof40489'
        )
);

$key = array_search(54, array_column($userdb, 'uid'));

//echo $key; // return 2

if ($key !== FALSE ) {echo "A fost gasita keya: ".$key; } 
else { echo "Nu a fost gasit!"; }

// Daca este setat true, in array_search, returneaza nimic,
// pentru ca '40489' string nu este egal cu 40489 integer
// Cand este setat true, capitalizarea e importanta
// $key = array_search(40489, array_column($userdb, 'uid'), true);