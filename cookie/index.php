<?php 

$cookie_name = 'fabrica';
$cookie_value = 'toate';

$safe_fabrica = array("deva", "vadu-crisului", "roman");

if (isset($_GET['fabrica'])) {
	$fabrica = $_GET['fabrica'];
	if (in_array($fabrica, $safe_fabrica)) {
		setcookie($cookie_name, $fabrica);
	}
} else{
	setcookie($cookie_name, $cookie_value);
}


$fabrica_filter = filter_input(INPUT_GET, 'fabrica');
?>

<html>
<title>Cookie</title>
<body>
	<a href="index.php?fabrica=vadu-crisului">Vadu Crisului</a><br>
	<a href="index.php?fabrica=roman">Roman</a><br>
	<a href="index.php?fabrica=deva">Deva</a><br>
	<a href="index.php?fabrica=fake-fabrica">Fake Fabrica</a><br>
	<br>
	<a href="other-page.php">Other page</a><br>

	<br>
	<br>
	<?php echo "PHP Version: " . phpversion(); ?>
	<br>
	<br>
	<?php echo "Fabrica filter: " . $fabrica_filter . "<br>"; 


		
		if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
		    echo("Email is not valid");
		} else {
		    echo("Email is valid");
		}
		
	?>
</body>
</html>

