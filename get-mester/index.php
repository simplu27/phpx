<?php

$lucrari = [];

$lucrari[] = array("id" => 1, "nume" => "Lucrarea Unu", "mester" => "Vali", "pret" => 1560, );
$lucrari[] = array("id" => 2, "nume" => "Lucrarea Doi", "mester" => "David", "pret" => 4554, );
$lucrari[] = array("id" => 3, "nume" => "Lucrarea Trei", "mester" => "Vali", "pret" => 890, );
$lucrari[] = array("id" => 4, "nume" => "Lucrarea Patru", "mester" => "David", "pret" => 213, );
$lucrari[] = array("id" => 5, "nume" => "Lucrarea Cinci", "mester" => "Vali", "pret" => 8799, );

// var_dump($lucrari);

if(isset($_GET['mester'])){
	$mester = $_GET['mester'];
	if(array_search($mester, array_column($lucrari, 'mester')) !== false){
		echo "Mester exist <br>";

		foreach ($lucrari as $key => $lucrare) {
			if($lucrare['mester'] != $mester){
				continue;
			}

			echo $lucrare['id'] . " : " . $lucrare['nume'] . " | Mester: " . $lucrare['mester'] . "<br>";
		}


	} else {
		echo "Mesterul nu exista";
	}

} elseif (!isset($_GET['mester'])) {
	echo "Nu este setat mester <br>";
	echo '<a href="index.php?mester=Vali">Mester Vali</a><br>';
	echo '<a href="index.php?mester=David">Mester David</a><br>';
}

