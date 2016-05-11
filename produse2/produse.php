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

$produse[] = array(
	'cod' => 'p006',
	'nume' => 'Super Name for Product Six',
	'pret' => 1325,
	'descriere' => 'Nice description for Product Number Six',
);

$produse[] = array(
	'cod' => 'p007',
	'nume' => 'James Bond Product',
	'pret' => 345.6,
	'descriere' => 'James bond is 007 product in this array',
);

// Genereaza 'url' din "nume" si "cod" combinate:
// Returneaza: produsul-unu-p001
foreach ($produse as $key => $value) {
	// Transforma in litere mici
	// Inlocuieste spatiile cu '-', apoi adauga codul produsului
	$produse[$key]['url'] = strtolower(str_replace(' ', '-', $produse[$key]['nume'])) . "-" . $produse[$key]['cod'];
	// Se adauga la fiecare produs o valoare noua in array:
	// 'url' => 'produsul-unu-p001'
} // end foreach