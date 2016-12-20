<?php

// Extract CSV to Array
// CSV delimited by TAB (\t)

ini_set('auto_detect_line_endings', '1');

$filename = 'csv-files/users-tab.csv';

include_once('csv-functions.php');

// Seteaza optiune: delimitare cu TAB

$options['delimiter'] = "\t";

$data = extractCsv($filename, true, $options);

echo "<pre>";
	var_dump($data);
echo "</pre>";