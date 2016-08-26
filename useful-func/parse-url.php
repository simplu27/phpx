<?php
// https://www.youtube.com/watch?v=S039FccN_Mk&index=5&list=PLBC2EFDE1797BC81F
// CodeCourse: PHP URL Splitting

// parse_url()

$link = "http://www.example.com:2095/tut/php-tut/tut1.php?view=true&pref=1";

echo "Link: " . $link . "<br><br>";

$parse = parse_url($link);

echo "<pre>";
print_r($parse);
echo "</pre>";

foreach ($parse as $key => $value) {
	echo $key . ": " . $value . "<br>";
}

echo "<br><hr><br>";

$splitPath = explode('/', $parse['path']);

echo "<pre>";
print_r($splitPath);
echo "</pre>";