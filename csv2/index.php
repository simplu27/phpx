<?php

// Extract CSV into Array

ini_set('auto_detect_line_endings', '1');

function extractCsvToArray($filename, $title = true, $delimiter = "|") {

	if (!file_exists($filename) || !is_readable($filename)) {
		return FALSE;
	} else {
		$handle = fopen($filename, 'r');

		while (($rows[] = fgetcsv($handle, 0, $delimiter)) !== FALSE ) {}

		if ($title) {
			$headers = array_shift($rows);
			foreach ($rows as $row) {
				if (is_array($row)) {
					$csv[] = array_combine($headers, $row);
				} // if
			} // foreach

			return $csv;
		} // if

		return $rows;

		fclose($handle);

	} // else

} // END function extractCsvToArray


$filename = "users-pipe.csv";

$data = extractCsvToArray($filename, true, "|");

if ($data) {
	echo "<pre>";
		var_dump($data);
	echo "</pre>";
} else {
	echo "Some trouble in paradise!";
}

// $data = array_slice($data, 10, 20);
