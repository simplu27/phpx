<?php
$produse = array();
$produse[] = array("nume" => "Produsul 1", "pret" => 320, );
$produse[] = array("nume" => "Produsul 2", "pret" => 13, );
$produse[] = array("nume" => "Produsul 3", "pret" => 1500, );
$produse[] = array("nume" => "Produsul 4", "pret" => 0, );
$produse[] = array("nume" => "Produsul 5", "pret" => -40, );
$produse[] = array("nume" => "Produsul 6", "pret" => 55.6, );
$produse[] = array("nume" => "A Produsul 7", "pret" => 98, );
$produse[] = array("nume" => "Z Produsul 8", "pret" => 565, );
echo "Array initial:";
echo "<pre>"; var_dump($produse); echo "</pre>";

///////////////////////////////////////////
// Sort by pret ascending
///////////////////////////////////////////

$price_asc = array();

	foreach ($produse as $key => $row) {
	    $price_asc[$key] = $row['pret'];
	}

array_multisort($price_asc, SORT_ASC, $produse);

echo "Sorteaza pret ascending:";
echo "<pre>";
	var_dump($price_asc);
	var_dump($produse);
echo "</pre>";

///////////////////////////////////////////
// Sort by pret DESCENDING
///////////////////////////////////////////

$price_des = array();
	foreach ($produse as $key => $row) {
	    $price_des[$key] = $row['pret'];
	}

array_multisort($price_des, SORT_DESC, $produse);

echo "Sort pret descending:";
echo "<pre>";
	var_dump($price_des);
echo "</pre>";

///////////////////////////////////////////
// Sort by name DESCENDING
///////////////////////////////////////////

$nume_des = array();
	foreach ($produse as $key => $row) {
	    $nume_des[$key] = $row['nume'];
	}

array_multisort($nume_des, SORT_DESC, $produse);

echo "Sort nume descending:";
echo "<pre>";
	var_dump($nume_des);
echo "</pre>";

///////////////////////////////////////////
// Sort by name ASCENDING
///////////////////////////////////////////

$nume_asc = array();
	foreach ($produse as $key => $row) {
	    $nume_asc[$key] = $row['nume'];
	}

array_multisort($nume_asc, SORT_ASC, $produse);

echo "Sort nume ascending:";
echo "<pre>";
	var_dump($nume_asc);
echo "</pre>";