<?php 

include('data.php');

/*
	if (isset($_GET['id'])) {
		$getid = $_GET['id'];
	}


	if (isset($tablouri[$getid])) {
		$tablou = $tablouri[$getid];
	} else {
		header('location: index.php');
		exit();
	}
*/

	// tablou.php?name=fetita-in-rosu

if (isset($_GET['name'])) {
	$get_name = $_GET['name'];
	if (array_search($get_name, array_column($tablouri, 'url')) !== false) {
		$key = array_search($get_name, array_column($tablouri, 'url'));
		$tablou = $tablouri[$key];
	}
	if (!$tablou) {
		header('Location:index.php');
		exit();
	}
} else {
	header('Location:index.php');
	exit();
}

	echo "Inapoi la tablouri: <a href='index.php'>Toate Tablourile</a><br>";
	echo "Title: " . $tablou['title'] . "<br>";
	echo "Pictor: " . $tablou['autor'] . "<br>";
	echo "Cod: " . $tablou['cod'] . "<br>";
	echo "Pret: " . $tablou['pret'] . "<br>";
	echo "Img: " . $tablou['img'] . "<br>";
	

// echo "Numele tabloului est e: " . $tablou['title'];