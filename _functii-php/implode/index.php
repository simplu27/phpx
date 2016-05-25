<?php
// implode()
// implode — Join array elements with a string
// string implode ( string $glue , array $pieces )

echo "<h2>implode()</h2>";

$array = array(
	'lastname' => 'John',
	'email' => 'email@gamil.com',
	'phone' => '074145248',
	'Another detalis about this user',
	'country',
	'info' => 'Nu functioneaza cu multidimensional array'
	);

$line_separated = implode(" | ", $array);
$comma_separated = implode("; ", $array);
$newline_separated = implode("\n\t I: ", $array);


echo "Array initial:<br>";

echo "<pre>";
	var_dump($array);
echo "</pre>";

echo "Dupa implode(): transforma array in string<br>
		cu o delimitare aleasa ( , | : * sau cu new-line [\\n] )";

echo "<pre>";
	var_dump($line_separated);
	var_dump($comma_separated);
	var_dump($newline_separated);
echo "</pre>";

echo $line_separated; // lastname | email | phone

echo "<br>";

echo "<h3>Creare lista din array</h3>";

echo "\n<ul>\n\t<li>" . implode("</li>\n\t<li>", $array) . "</li>\n</ul>\n";
