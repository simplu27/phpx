<?php
$produse = array();
$produse[] = array('nume' => 'Produs 1', 'pret' => 345 );
$produse[] = array('nume' => 'Produs 2', 'pret' => 989 );
$produse[] = array('nume' => 'Produs 3', 'pret' => 29 );
$produse[] = array('nume' => 'Produs 4', 'pret' => 5678 );
$produse[] = array('nume' => 'Produs 5', 'pret' => 120 );

echo "<h3>Array Initial</h3>";
echo "<pre>";
	var_dump($produse);
echo "</pre>";

echo "<hr>";

////////////////////////////////////////////////////////////

// Sorteaza pret ascendent [de la cel mai mic, spre cel mai mare]
function sorteaza_pret_ascendent($a, $b){
	$sorteaza = 'pret';
	if ($a[$sorteaza] == $b[$sorteaza]) {return 0;}
	// primul pret < urmatorul pret
	return ($a[$sorteaza] < $b[$sorteaza]) ? -1 : 1;
}

// uasort pastreaza indexul fiecarui array
uasort($produse, 'sorteaza_pret_ascendent');

echo "<h3>Sorteaza pret ascendent</h3>";

echo "<pre>";
	var_dump($produse);
echo "</pre>";

//////////////////////////////////////////////////////////////

// Sorteaza pret descendent
function sorteaza_pret_descendent($a, $b){
	$sorteaza = 'pret';
	if ($a[$sorteaza] == $b[$sorteaza]) {return 0;}
	// primul pret > urmatorul pret
	return ($a[$sorteaza] > $b[$sorteaza]) ? -1 : 1;
}

// uasort pastreaza indexul fiecarui array
uasort($produse, 'sorteaza_pret_descendent');

echo "<h3>Sorteaza pret descendent</h3>";

echo "<pre>";
	var_dump($produse);
echo "</pre>";

//////////////////////////////////////////////////////////////