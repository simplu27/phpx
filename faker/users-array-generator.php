<?php
// require the Faker autoloader
require_once 'autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
// $faker = Faker\Factory::create('ro_RO');
$faker = Faker\Factory::create();


for ($i = 0; $i < 51; $i++) {
?>
<pre>
$users[<?php // echo $i; ?>] = array(
	"numerify" => "<?php echo $faker->numerify('###'); ?>",
	"firstName" => "<?php echo $faker->firstName; ?>",
	"lastName" => "<?php echo $faker->lastName; ?>",
	"freeEmail" => "<?php echo $faker->freeEmail; ?>",
	"randomNumber" => "<?php echo $faker->randomNumber($nbDigits = NULL); ?>",
	"regexify" => "<?php echo $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,3}'); ?>",
	"word" => "<?php echo $faker->word; ?>",
	"bankAccountNumber" => "<?php echo $faker->bankAccountNumber; ?>",
	"numberBetween10-9000" => <?php echo $faker->numberBetween($min = 10, $max = 9000); ?>,
	"time" => "<?php echo $faker->time($format = 'H:i:s', $max = 'now'); ?>",
	"ipv4" => "<?php echo $faker->ipv4; ?>",
	"creditCardDetails" => "<?php echo implode(', ', $faker->creditCardDetails); ?>",
	"iban('RO')" => "<?php echo $faker->iban('RO'); ?>",
	"company" => "<?php echo $faker->company; ?>",
);
</pre>

<?php 

} ?>