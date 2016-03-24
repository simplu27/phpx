<?php
// Array de proba
$produse = array();
$produse[] = array("nume" => "Produsul 1", "pret" => 320, );
$produse[] = array("nume" => "Produsul 2", "pret" => 13, );
$produse[] = array("nume" => "Produsul 3", "pret" => 1500.67, );
$produse[] = array("nume" => "Produsul 4", "pret" => 0, );
$produse[] = array("nume" => "Produsul 5", "pret" => -40, );
$produse[] = array("nume" => "Produsul 6", "pret" => 55.6, );
$produse[] = array("nume" => "Produsul 45", "pret" => 345, );
$produse[] = array("nume" => "Amandina 69", "pret" => 2600, );
$produse[] = array("nume" => "Zelaida 80", "pret" => 808, );
$produse[] = array("nume" => "Super long product title", "pret" => 33808, );
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
		
} elseif (isset($_GET['nume'])) {

	if ($_GET['nume'] === 'az') {
		$mesaj = "Nume [a-z]!";
		
		usort($produse, function ($item1, $item2) {
			if ($item1['nume'] == $item2['nume']) return 0;
	   		// Sorteaza in functie de nume [crescator]
	    	return $item1['nume'] < $item2['nume'] ? -1 : 1;
		});

	} elseif ($_GET['nume'] === 'za') {
		$mesaj = "Nume [z-a]!";

		usort($produse, function ($item1, $item2) {
			if ($item1['nume'] == $item2['nume']) return 0;
	   		// Sorteaza in functie de nume [crescator]
	    	return $item1['nume'] > $item2['nume'] ? -1 : 1;
		});

	} else {
		$mesaj = "Nume nu este az sau za. Ordinea normala:";
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
<style>
	td.pret {
		background: #EFEFEF;
		padding: 2px 6px;
		text-align: right;
		margin-left: 10px;
		display: inline-block;
		width: 100%;
	}
</style>
</head>
<body>

Sorteaza: 
<a href="sort-probat.php?reverse=da">Ordine inversa</a> | 
<a href="sort-probat.php?sort=asc">Pret crescator</a> | 
<a href="sort-probat.php?sort=des">Pret descrescator</a> | 
<a href="sort-probat.php?nume=az">Nume [a-z]</a> | 
<a href="sort-probat.php?nume=za">Nume [z-a]</a> | 
<a href="sort-probat.php">Ordinea normala</a>

<?php 
echo "<h2>$mesaj</h2>";
echo "<table>";
// echo "<pre>"; var_dump($produse); echo "</pre>"; 

	foreach ($produse as $produs) {
		$nume = $produs['nume'];
		$pret = $produs['pret'];
		// Format number
		$pret = number_format($pret, 2, ',','.');
		echo '<tr><td>' . $nume . "</td><td class='pret'>" . $pret . "  Lei <td></tr>";
	}

echo "</table>";
?>
</body>
</html>