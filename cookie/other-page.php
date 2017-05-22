<?php


if (isset($_COOKIE['fabrica'])) {
	$fabrica = $_COOKIE['fabrica'];
	echo "Cookie fabrica is: " . $fabrica . '<br>';
} else {
	echo "Cookie is not set!";
}

?>

<a href="index.php">Back to index</a>