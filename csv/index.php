<?php

// Retrive data from csv file

ini_set('auto_detect_line_endings', '1');

$filename1 = 'users.csv';

include_once('csv-functions.php');

// Testeaza generarea de tabel din fisier .csv

// tableFromCsv(filename, daca are titlu, ce separator foloseste)
// echo tableFromCsv($filename1, $title = true, $separator = '|');

// Testeaza csv to array

$data = extractCsv('virgula.csv', $title=true, $separator = ",");

echo "<pre>";
	var_dump($data);
echo "</pre>";