<a href="array-from-csv.php">Array from csv</a>
<?php

// Retrive data from csv file

ini_set('auto_detect_line_endings', '1');

$filename1 = 'users.csv';

include_once('csv-functions.php');

// Testeaza generarea de tabel din fisier .csv

// tableFromCsv(filename, daca are titlu, ce separator foloseste).
$options['delimiter'] = "|";
echo tableFromCsv($filename1, true, $options);

// Testeaza csv to array
$options['delimiter'] = ",";
$data = extractCsv('virgula.csv', true, $options);

echo "<pre>";
	var_dump($data);
echo "</pre>";