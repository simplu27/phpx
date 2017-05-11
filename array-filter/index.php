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
$deva = array_filter($produse, function($v){return $v['fabrica'] == 'Deva';});
$stoc = array_filter($produse, function($v){return $v['stoc'] == 'da';});



echo "<h1>Doar Vad</h1>";

echo "<pre>";
	var_dump($vad);
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

uasort($produse, function($item1, $item2) {
					if ($item1['pret'] == $item2['pret']) return 0;
	   				// Sorteaza in functie de pret [crescator]
	    			return $item1['pret'] < $item2['pret'] ? -1 : 1;}
	    	);

echo "<pre>";
	var_dump($produse);
echo "</pre>";


reset($produse);

echo "<h1>Array initial reset</h1>";

echo "<pre>";
	var_dump($produse);
echo "</pre>";







