<?php

// Verifica daca un fisier exista sau nu
// Intoarce TRUE daca exista, si FALSE da nu exista

$fisier = 'fisiere/fisier1.html';

if (file_exists($fisier)) {
	echo "Fisierul exista! <br><br>";
	echo "<strong>Continut fisier:</strong> <br>";
	// Daca fisierul exista, include-l
	include($fisier);
} else {
	echo "Fisierul NU a fost gasit!";
}