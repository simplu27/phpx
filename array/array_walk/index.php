<!DOCTYPE html>
<html>
<body>

<?php

	function myfunction($value,$key) {
		echo "The key $key has the value $value<br>";
	}

	$a=array("a"=>"red","b"=>"green","c"=>"blue");
	array_walk($a,"myfunction");

	/*
	Return:
		The key a has the value red
		The key b has the value green
		The key c has the value blue
	*/

?>

</body>
</html>