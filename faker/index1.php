<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Faker Test</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="style.css">
<style>
	.center {
		max-width: 800px;
		margin: 20px auto;
		padding: 10px;
	}
</style>
</head>
<body>
<div class="center">

<?php
// require the Faker autoloader
require_once 'autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
// $faker = Faker\Factory::create('ro_RO');
$faker = Faker\Factory::create();

for ($i=0; $i < 10 ; $i++) { 
	// generate data by accessing properties
	echo "Name: " . $faker->name($prefix=NULL);
	  // 'Lucy Cechtelar';
	echo "<br>";
	echo "Address: " . $faker->address;
	  // "426 Jordy Lodge
	  // Cartwrightshire, SC 88120-6700"
	echo "<br>";
	echo "Text: " . $faker->text;
	  // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
	  // et sit et mollitia sed.
	  // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
	  // sit minima sint.
	echo "<br>";
	echo "Company: " . $faker->company;
	echo "<br>";
	echo "E-mail: " . $faker->email;
	echo "<br>";
	echo "Phone: " . $faker->phoneNumber;

	echo "<br>";
	// echo "CNP: " . $faker->cnp;

	echo "<hr>";
}

for ($i = 0; $i < 2; $i++)
{
  $users[$i] = array(
    'username' => $faker->userName,
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'email' => $faker->email,
    'password' => $faker->word,
    'url' => $faker->url
  );
}

echo "<pre>";
	var_dump($users);
echo "</pre>";

?>
</div><!-- center -->
</body>
</html>