<a href="array-from-csv.php">Array from csv, then create table</a><br>
<a href="extract-csv-to-array.php">Extract CSV to Array, CSV delimited by tab</a>
<?php

// Retrive data from csv file

ini_set('auto_detect_line_endings', '1');

$filename1 = 'csv-files/users.csv';

include_once('csv-functions.php');

// Testeaza generarea de tabel din fisier .csv

// tableFromCsv(filename, daca are titlu, ce separator foloseste).
$options['delimiter'] = "|";

echo "<h2>Generate table from CSV</h2>";

echo tableFromCsv($filename1, true, $options);

// Testeaza csv to array
// $options['delimiter'] = ",";
// $data = extractCsv('csv-files/virgula.csv', true, $options);

// echo "<pre>";
// 	var_dump($data);
// echo "</pre>";