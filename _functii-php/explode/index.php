<?php

// explode() : Split a string by string
// array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )
// Exemple:

echo "<h2>explode()</h2>";

// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";

echo "String initial: <br>";
echo "<pre>";
	var_dump($pizza);
echo "</pre>";


$pieces = explode(" ", $pizza);

echo "Dupa explode() avem un array: <br>";
echo "<pre>";
	var_dump($pieces);
echo "</pre>";

echo "<h3>Example 1</h3>";
echo "Se poate returna o portiune din array, in functie de key <br>";

echo $pieces[0] . "<br>"; // piece1
echo $pieces[1] . "<br>"; // piece2

echo "<br>";

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";

$fix = list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);

echo "<h3>Example 2</h3>";

echo "<pre>";
	var_dump($data);
	var_dump(explode(':', $data));
	echo "Se poate limita nr de key care se intorc:";
	var_dump(explode(':', $data, 4));
	var_dump($fix);
echo "</pre>";

echo "User: " . $user . "<br>"; // foo
echo "Password: " . $pass . "<br>"; // *
echo "UID: " . $uid . "<br>"; // *

echo "<hr>";