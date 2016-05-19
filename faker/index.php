<?php
// require the Faker autoloader
require_once 'autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('ro_RO');

for ($i=0; $i < 3 ; $i++) { 
	// generate data by accessing properties
	echo "Name: " . $faker->name;
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

	echo "<hr>";
}
