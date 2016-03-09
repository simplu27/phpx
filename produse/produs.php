<?php

include('data.php');

// index.php?id=101

// preia id-ul si pune-l in variabila

$produs_id = $_GET['id'];

// se verifica daca exista, in array, un produs cu acest id

if (isset($produse[$produs_id])) {

	// daca exista in array, se preia de o variabila
	// de ex: $produs = $produse[101];

	$produs = $produse[$produs_id];
}

// daca nu exista nici un produs cu id-ul din url
if (!isset($produs)) {
	// se redirectioneaza spre pagina cu toate produsele

	header('location:http://www.test.dev/produse/');

	// inainte sa se printeze ceva in pagina. important!!!
	exit();
}

// Daca produsul exista, se prelucreaza informatiile:

echo "<pre>";
	var_dump($produse);
echo "<pre>";
echo "<hr>";

echo "Avem un produs: <br>" . $produs . "<br>";

echo '<a href="/produse/">Toate produsele</a>';

