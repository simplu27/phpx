<?php

$base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST'];
 $url = $base_url . $_SERVER["REQUEST_URI"];

 echo $url;

 echo "<br>";
 echo "<br>";
 echo "<br>";


 echo "parse_url";

 var_dump(parse_url($url));

 echo "<br>";
 echo "<br>";


echo "QUERY_STRING: " . $_SERVER['QUERY_STRING'] . "<br>";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br>";

echo "<br>";
echo "<br>";

if ($_SERVER['QUERY_STRING']) {
	echo "Avem Query";
} else {
	echo "NU avem Query";
}