<?php
// Pagina pentru un singur produs
// Array pagination

// Include array-ul cu produse:
include('../data.php');

if (isset($_GET['prod'])) {
	// echo $_GET['prod'];
	$prod = $_GET['prod'];

	// Afla keya produsului, pentru a putea afisa datele
	$key_prod = array_search($prod, array_column($data, 'url'));
	// array_search intoarce keya

	// Daca nu este gasit produsul in array, se intoarce FALSE
	if ($key_prod !== FALSE) {
		// daca nu a intors FALSE, atribuim keya produsului:
		$produs = $data[$key_prod];
	} else {
		// Daca cautarea a intors FALSE, inseamna ca nu exista produsul cautat
		// Redirectionam catre pagina cu toate produsele;
		// Si parasim aplicatia!
		header('Location: ../');
		exit();
	}

} else {
	// Daca in link nu este setat produsul de genul: index.php?prod=zephr-2
	// Ne intoarcem la pagina cu toate produsele si parasim aplicatia:
	header('Location: ../');
	exit();
}

// echo "<pre>";
// 	var_dump($produs);
// echo "</pre>";

// Daca linkul a fost gasit in arrayul cu produse
// $produs = $data[$key_prod];
// Putem afisa datele produsului

$prod_id = $produs['id'];
$prod_nume = $produs['name'];
$prod_pret = $produs['price'];
$prod_description = $produs['data'];
$prod_url = $produs['url'];
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $prod_nume; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="../style.css">
</head>
<body>
<div class="center">
	<span><a href="javascript:history.go(-1)" title="Pagina anterioara">&laquo; Inapoi</a></span><br>
	<span>Referer: <?php echo (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '' ?></span><br><br>
	<hr><br>
	<h1><?php echo $prod_nume; ?></h1>
	<p>Produs id: <?php echo $prod_id; ?></p>
	<p>Pret: <?php echo $prod_pret; ?> Lei</p>
	<p>Descriere: <?php echo $prod_description; ?></p>
	<p>URL: <?php echo $prod_url; ?></p>

	<br><hr>

	<?php 
		// Aflam produsul anterior si urmator, in functie de produsul actual
		// Numarul total de produse:
		$total = count($data); // returneaza 100
		// Produsul actual:
		$curent_key = $key_prod; // indexul produsului current


		$url_path = 'index.php?prod=';


		if ($curent_key >= 1) {$prev_key = $curent_key - 1;}
		else {$prev_key = $total - 1;}

		if ($curent_key < ($total - 1)) {$next_key = $curent_key + 1;}
		else {$next_key = 0;}

		$prev_url = $url_path . $data[$prev_key]['url'];
		$next_url = $url_path . $data[$next_key]['url'];

		$prev_name = "Produsul anterior: " . $data[$prev_key]['name'];
		$next_name = "Produsul urmator: " . $data[$next_key]['name'];
	?>
	<div class="paginare">
		<a href="<?php echo $prev_url; ?>" class="prev" title="<?php echo $prev_name; ?>">&laquo; Produsul anterior</a>
		<a href="../" title="Pagina cu toate produsele">Toate produsele</a>
		<a href="<?php echo $next_url; ?>" class="next" title="<?php echo $next_name; ?>">Produsul urmator &raquo;</a>
	</div>
</div><!-- center -->
</body>
</html>