<?php

$data = array(
	'name' => 'John',
	'age' => 37,
	);

if (isset($_GET['age'])) {
	$age = $_GET['age'];

	$data['age'] = $age;
}

echo $data['age'];