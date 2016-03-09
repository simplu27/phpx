<?php

function url_frumos($string){
	$string = strtolower($string);
	$string = str_replace(' ', "-", $string);
	return $string;
}

$tablouri = array();

$tablouri[] = array(
	"cod" => "1001",
	"title" => "Car cu boi",
	"autor" => "Nicolae Grigorescu",
	"img" => "car-cu-boi.jpg",
	"pret" => 2500
	);

$tablouri[] = array(
	"cod" => "1002",
	"title" => "Fetita in rosu",
	"autor" => "Nicolae Grigorescu",
	"img" => "fetita-in-rosu.jpg",
	"pret" => 6800
	);


$tablouri[] = array(
	"cod" => "1003",
	"title" => "Sanziene",
	"autor" => "Mircea Ionescu",
	"img" => "sanziene.jpg",
	"pret" => 1340
	);

foreach ($tablouri as $key => $value) {
	$tablouri[$key]['url'] = url_frumos($value['title']);
}

// echo "<pre>";
// 	var_dump($tablouri);
// echo "</pre>";
