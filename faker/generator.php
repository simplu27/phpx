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
	pre {
		/*word-wrap: break-word;
		white-space: pre-wrap;*/
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

echo "<h2>Genereaza php array data</h2>";

for ($i = 0; $i < 12; $i++)
{ ?>
<pre>
$users[<?php // echo $i; ?>] = array(
	"numerify" => "<?php echo $i. $faker->numerify('-AR-###'); ?>",
	"name" => "<?php echo $faker->name; ?>",
	"userName" => "<?php echo $faker->userName; ?>",
	"firstName" => "<?php echo $faker->firstName; ?>",
	"lastName" => "<?php echo $faker->lastName; ?>",
	"freeEmail" => "<?php echo $faker->freeEmail; ?>",
	"randomNumber" => "<?php echo $faker->randomNumber($nbDigits = NULL); ?>",
	"regexify" => "<?php echo $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,3}'); ?>",
	"word" => "<?php echo $faker->word; ?>",
	"bankAccountNumber" => "<?php echo $faker->bankAccountNumber; ?>",
	"numberBetween10-9000" => <?php echo $faker->numberBetween($min = 10, $max = 9000); ?>,
	"url" => "<?php echo $faker->url; ?>"',
	"date" => "<?php echo $faker->date($format = 'd-m-Y', $max = 'now'); ?>",
	"time" => "<?php echo $faker->time($format = 'H:i:s', $max = 'now'); ?>",
	"ipv4" => "<?php echo $faker->ipv4; ?>",
	"creditCardDetails" => "<?php echo implode(', ', $faker->creditCardDetails); ?>",
	"iban('RO')" => "<?php echo $faker->iban('RO'); ?>",
	"uuid" => "<?php echo $faker->uuid; ?>",
	"company" => "<?php echo $faker->company; ?>",
	"text(400)" => "<?php echo $faker->text(400); ?>",
	"address" => "<?php echo $faker->address; ?>",
	"imageUrl" => "<?php echo $faker->imageUrl(600, 400, 'cats', true, 'Faker'); ?>"
);
</pre>
<?php  }

$faker = Faker\Factory::create('ro_RO'); // create a French faker
for ($i=0; $i < 10; $i++) {
  echo $faker->name, "\n";
}


?>
</div><!-- center -->
</body>
</html>