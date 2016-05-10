<?php

// Array cu produse
// Fiecare produs contine: cod, nume, pret, descriere, url (generat automat din cod si nume)

$produse = array();

$produse[] = array(
	'cod' => 'p001',
	'nume' => 'Produsul Unu',
	'pret' => 234,
	'descriere' => 'Descriere pentru Produsul Unu',
);

$produse[] = array(
	'cod' => 'p002',
	'nume' => 'Produsul Doi',
	'pret' => 680,
	'descriere' => 'Descriere pentru Produsul Doi',
);

$produse[] = array(
	'cod' => 'p003',
	'nume' => 'Produsul Trei',
	'pret' => 99,
	'descriere' => 'Descriere pentru Produsul Trei',
);

$produse[] = array(
	'cod' => 'p004',
	'nume' => 'Produsul Patru',
	'pret' => 3400,
	'descriere' => 'Descriere pentru Produsul Patru',
);

$produse[] = array(
	'cod' => 'p005',
	'nume' => 'Produsul Cinci',
	'pret' => 25,
	'descriere' => 'Descriere pentru Produsul Cinci',
);

foreach ($produse as $key => $value) {
	$produse[$key]['url'] = strtolower(str_replace(' ', '-', $produse[$key]['nume'])) . "-" . $produse[$key]['cod'];
}