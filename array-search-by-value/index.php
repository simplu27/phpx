<?php

$data = array();

$data[] = array("url" => 'item-unu', "pret" => 304, );
$data[] = array("url" => 'item-doi', "pret" => 366, );
$data[] = array("url" => 'item-trei', "pret" => 67657, );
$data[] = array("url" => 'item-patru', "pret" => 578, );


$cauta = 'item-unu';
$key = array_search($cauta, array_column($data, 'url'));
echo $key;