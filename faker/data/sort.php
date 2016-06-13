<?php 

include_once 'array-data.php';

function pretAsc($a,$b){
	$sorteaza = 'pret';
	return $a[$sorteaza] < $b[$sorteaza] ? -1 : 1;
}

uasort($data, 'pretAsc');


echo "<pre>";
	var_dump($data);
echo "</pre>";

?>