<?php

$string = 'define("APP_ROOT", dirname(dirname(__FILE__)));
	echo APP_ROOT;';

	echo $string . "<br>";

	define("APP_ROOT", dirname(dirname(__FILE__)));
	echo APP_ROOT;

?>