<?php

// csv functions

// Learn from Code Clinic Php [David Powers] [Probelm Six]

// Am adaugat eu separatorul, in cazul ca datele din csv nu sunt despartite de virgula,
// ci de alte caractere, cum ar fi pipe "|".

// tableFromCsv: functie care returneaza un tabel cu datele din CSV

// Exemplu:
// $filename1 = 'users.csv';
// tableFromCsv(filename, daca are titlu, ce separator foloseste)
// echo tableFromCsv($filename1, true, $options[]);

function tableFromCsv($filename, $title = true, $options = null) {

	// verifica daca fisierul exista sau daca poate fi citit
	if (!file_exists($filename) || !is_readable($filename)) {
		return false;
	} else {
		// Set options for fgetcsv: lenght, delimiter, enclosure, escape
		// array fgetcsv ( resource $handle [, int $length = 0 [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\" ]]]] )
		$options['lenght'] = (isset($options['lenght'])) ? $options['lenght'] : 0;
		$options['delimiter'] = (isset($options['delimiter'])) ? $options['delimiter'] : ",";
		$options['enclosure'] = (isset($options['enclosure'])) ? $options['enclosure'] : '"';
		$options['escape'] = (isset($options['escape'])) ? $options['escape'] : '\\';
		// deschide fisierul
		$file = fopen($filename, 'r');
		// adauga fiecare linie din csv intr-un array: $rows
		while (($rows[] = fgetcsv($file, $options['lenght'], $options['delimiter'], $options['enclosure'], $options['escape'])) !== false) {}
		// incepem sa construim tabelul
		$output = "<table>\n<tr>\n";
		// daca fisierul csv are titlu, se extrage din $rows:
		if ($title) {
			$headers = array_shift($rows);
			// pune fiecare titlu in th
			foreach ($headers as $header) {
				$output .= "<th>" . ucwords($header) . "</th>\n";
			}
			// inchide <tr>
			$output .= "</tr>\n";
		}

		foreach ($rows as $row) {
			// verifica daca $row este array, altfel returneaza eroare la ultima linie
			if (is_array($row)) {
				// deschide linia (row)
				$output .= "<tr>\n";
				// afiseaza datele in tabel
				foreach ($row as $item) {
					$output .= "<td>$item</td>\n";
				}
				// inchide linia (row)
				$output .= "</tr>\n";
			}
		}
		// inchide tabelul
		$output .= "</table>\n";
	}
	// inchide fisierul
	fclose($file);

	// returneaza tabelul cu date
	return $output;

} // tableFromCsv

///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////

// Functie care extrage datele dintr-un fisier .csv si le asociaza unui array multidimensional

function extractCsv($filename, $title = true, $options = null){
	// verifica daca fisierul exista sau daca poate fi citit
	if (!file_exists($filename) || !is_readable($filename)) {
		return false;
	} else {
		// Set options for fgetcsv: lenght, delimiter, enclosure, escape
		// array fgetcsv ( resource $handle [, int $length = 0 [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\" ]]]] )
		$options['lenght'] = (isset($options['lenght'])) ? $options['lenght'] : 0;
		$options['delimiter'] = (isset($options['delimiter'])) ? $options['delimiter'] : ",";
		$options['enclosure'] = (isset($options['enclosure'])) ? $options['enclosure'] : '"';
		$options['escape'] = (isset($options['escape'])) ? $options['escape'] : '\\';
		// deschide fisierul
		$file = fopen($filename, 'r');
		// adauga fiecare linie din csv intr-un array: $rows
		while (($rows[] = fgetcsv($file, $options['lenght'], $options['delimiter'], $options['enclosure'], $options['escape'])) !== false) {}
		// daca fisierul csv are titlu, se extrage din $rows:
		if ($title) {
			// preia primul rand din csv, ca titlu
			$headers = array_shift($rows);
			foreach ($rows as $row) {
				if (is_array($row)) {
					// combina titlul ($key) cu celelalte randuri ($value)
					$csv[] = array_combine($headers, $row);
				}
			}
			// Daca exista titlu
			return $csv;
		} else {
			// Daca nu exista titlu, returneaza $rows
			return $rows;
		}

		// inchide fisierul
		fclose($file);
	}
}