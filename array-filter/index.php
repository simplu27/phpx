<?php

$produse = array();

$produse['Vad Brun'] = array(
	'nume' => 'Vad Brun',
	'stoc' => 'da',
	'fabrica' => 'Vadu Crisului',
	'pret' => 1045,
	);

$produse['Vad Natur'] = array(
	'nume' => 'Vad Natur',
	'stoc' => 'nu',
	'fabrica' => 'Vadu Crisului',
	'pret' => 1245,
	);

$produse['Maro Trandafir'] = array(
	'nume' => 'Maro Trandafir',
	'stoc' => 'da',
	'fabrica' => 'Deva',
	'pret' => 2045,
	);

$produse['Bej Bizantin'] = array(
	'nume' => 'Bej Bizantin',
	'stoc' => 'da',
	'fabrica' => 'Deva',
	'pret' => 1045,
	);

$produse['Alb Bizantin'] = array(
	'nume' => 'Alb Bizantin',
	'stoc' => 'nu',
	'fabrica' => 'Deva',
	'pret' => 3000,
	);

echo "<h1>Array initial</h1>";

echo "<pre>";
	var_dump($produse);
echo "</pre>";


$vad = array_filter($produse, function($v){return $v['fabrica'] == 'Vadu Crisului';});
$vad_stoc = array_filter($vad, function($v){return $v['stoc'] == 'da';});
$deva = array_filter($produse, function($v){return $v['fabrica'] == 'Deva';});
$stoc = array_filter($produse, function($v){return $v['stoc'] == 'da';});



echo "<h1>Doar Vad</h1>";

echo "<pre>";
	var_dump($vad);
echo "</pre>";


echo "<h1>Doar Vad, doar pe stoc</h1>";

echo "<pre>";
	var_dump($vad_stoc);
echo "</pre>";



echo "<h1>Doar Deva</h1>";

echo "<pre>";
	var_dump($deva);
echo "</pre>";


echo "<h1>Doar pe stoc</h1>";

echo "<pre>";
	var_dump($stoc);
echo "</pre>";



echo "<h1>Pret ascendent</h1>";

// uasort($produse, function($item1, $item2) {
// 					if ($item1['pret'] == $item2['pret']) return 0;
// 	   				// Sorteaza in functie de pret [crescator]
// 	    			return $item1['pret'] < $item2['pret'] ? -1 : 1;}
// 	    	);

	// Sorteaza, in fctie de pret, de la mic la mare
	function pretAscendent($a, $b){
		if ($a['pret'] == $b['pret']) return 0;
		return $a['pret'] < $b['pret'] ? -1 : 1;
	}

	// Sorteaza, in fctie de pret, de la mare la mic
	function pretDescendent($a, $b){
		if ($a['pret'] == $b['pret']) return 0;
		return $a['pret'] > $b['pret'] ? -1 : 1;
	}

	// Sorteaza, in fctie de nume, de la A la Z
	function alfabeticAZ($a, $b){
		if ($a['nume'] == $b['nume']) return 0;
		return $a['nume'] < $b['nume'] ? -1 : 1;
	}

// uasort($produse, 'pretAscendent');
// uasort($produse, 'pretDescendent');
uasort($produse, 'alfabeticAZ');

echo "<pre>";
	var_dump($produse);
echo "</pre>";












