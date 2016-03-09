<?php 

include('data.php');

$getname = $_GET['name'];

if (isset($tablouri[$getname])) {
	$tablou = $tablouri[$getid];
} else {
	header('location: index.php');
	exit();
}

echo "Numele tabloului este: " . $tablou['title'];