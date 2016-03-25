<?php
// http://stackoverflow.com/questions/14994075/sort-multidimensional-arrays-by-sub-array-key-value

$items = [
    ['id' => 3, 'pret' => 2, 'item' => 'pc'],
    ['id' => 1, 'pret' => 33, 'item' => 'mouse'],
    ['id' => 2, 'pret' => 129, 'item' => 'kb'],
];

echo "<h2>Intial array: </h2>";
echo "<pre>";
	var_dump($items);
echo "</pre>";

function compare_id($a, $b) {
    if ($a['id'] == $b['id']) return 0;
    return ($a['id'] < $b['id']) ? -1 : 1;
}

usort($items, 'compare_id');


echo "<h2>Sorted by ID array: </h2>";
echo "<pre>";
	var_dump($items);
echo "</pre>";