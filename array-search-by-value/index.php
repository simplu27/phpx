<?php

$data = array();

$data[] = array("url" => 'item-unu', "pret" => 304, );
$data[] = array("url" => 'item-doi', "pret" => 366, );
$data[] = array("url" => 'item-trei', "pret" => 67657, );
$data[] = array("url" => 'item-patru', "pret" => 578, );


$cauta = 'item-unu';
$key = array_search($cauta, array_column($data, 'url'));
echo $key;

$cahle = array();

$cahle[] = array(
	"nume" => "Maro T",
	"culoare" => "maro",
	"pret" => 965,
	"imagine" => "maro-t.jpg",
	"fabrica" => "Deva",
	"descriere" => "Modelul Maro T este un model clasic de cahle de teracota, de un maro lucios, care confera un plus camerei dvs, prin frumusetea si calitatea sa."
	);

$cahle[] = array(
	"nume" => "Verde Bizantin",
	"culoare" => "verde",
	"pret" => 995,
	"imagine" => "verde-bizantin.jpg",
	"fabrica" => "Deva",
	"descriere" => "Modelul Verde Bizantin este un model clasic de cahle de teracota, de un verde lucios, care confera un plus camerei dvs, prin frumusetea si calitatea sa.",
	);

foreach ($cahle as $key => $value) {
	$url = strtolower(str_replace(' ', '-', $cahle[$key]['nume']));
	$cahle[$key]['url'] = $url;
}

$cauta = 'verde-bizantin';
$key = array_search($cauta, array_column($cahle, 'url'));
echo "<br>" . $key;

echo "<pre>";
	var_dump($cahle);
echo "</pre>";












