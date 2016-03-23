<?php
// Array de proba
$produse = array();
$produse[] = array("nume" => "Produsul 1", "pret" => 320, );
$produse[] = array("nume" => "Produsul 2", "pret" => 13, );
$produse[] = array("nume" => "Produsul 3", "pret" => 1500, );
$produse[] = array("nume" => "Produsul 4", "pret" => 0, );
$produse[] = array("nume" => "Produsul 5", "pret" => -40, );
$produse[] = array("nume" => "Produsul 6", "pret" => 55.6, );
// echo "<pre>"; var_dump($produse); echo "</pre>";

// Verifica daca este in array. Valori posibile acceptate
$sort = array("nat", "des", "asc");

if (isset($_GET['sort'])) {
	$getsort = $_GET['sort'];

	if (in_array($getsort, $sort) AND $getsort === "des" ){

		$mesaj = "Sorteaza pret descrescator!";

		usort($produse, function ($item1, $item2) {
	   		if ($item1['pret'] == $item2['pret']) return 0;
	    	// Sorteaza in functie de pret [descrescator]
	    	return $item1['pret'] > $item2['pret'] ? -1 : 1;
		});

	} elseif (in_array($getsort, $sort) AND $getsort === "asc") {

		$mesaj = "Sorteaza pret crescator!";

		usort($produse, function ($item1, $item2) {
			if ($item1['pret'] == $item2['pret']) return 0;
	   		// Sorteaza in functie de pret [crescator]
	    	return $item1['pret'] < $item2['pret'] ? -1 : 1;
		});

	} else {
		$mesaj = "Nu e setata sortarea! Ordinea normala!";
	}

} elseif (isset($_GET['reverse'])) {

	if ($_GET['reverse'] === 'da') {
		$mesaj = "Ordinea inversa!";
		$produse = array_reverse($produse);
	} else {
		$mesaj = "Reverse nu este da. Ordinea normala:";
	}	
		
} else {
	$mesaj = "Ordinea normala";
	// header("Location: redirect.php");
	// exit();
} 
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sorteaza pret</title>
</head>
<body>

Sorteaza: 
<a href="sort-probat.php?reverse=da">Ordine inversa</a> | 
<a href="sort-probat.php?sort=asc">Pret crescator</a> | 
<a href="sort-probat.php?sort=des">Pret descrescator</a> | 
<a href="sort-probat.php">Ordinea normala</a>

<?php 
echo "<h2>$mesaj</h2>";
// echo "<pre>"; var_dump($produse); echo "</pre>"; 
	foreach ($produse as $produs) {
		echo $produs['nume'] . ": " . $produs['pret'] . " Lei <br>";
	}
?>
</body>
</html>