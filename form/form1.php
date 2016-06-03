<!DOCTYPE html>  
<html>
<head>
	<meta charset="utf-8">
	<title>The World of Fruit - Fruit Survey</title>
<style type="text/css">
h1 {background-color: #FC0; font-size: 14pt; text-align: center; margin-bottom: 0px; margin-left: auto; margin-right: auto; width: 500px; }
h2 {background-color: #FF9; font-size: 14pt; text-align: center; margin: 0px auto; width: 500px; }
form {background-color: #FF9; margin-left: auto; margin-right: auto; margin-top: 0px; padding-top: 0px; width: 500px; }
label {display: block; font-size: 12pt; float: left; text-align: right; margin-right: 10px; width: 200px; margin-bottom: 10px; }
div.radioSet {width: 300px; margin-left: 210px; }
div.radioSet label {display: inline; float: none; }
input, select {margin-bottom: 10px; }
input[type="submit"] {margin-left: 210px; }
span.error {color: #F00; }
</style>
</head>
<body>
	<?php

// TUTORIAL: https://www.sitepoint.com/form-validation-with-php/
// CODE: https://gist.github.com/tboronczyk/2048047

// define variables and initialize with empty values
	$nameErr = $addrErr = $emailErr = $howManyErr = $favFruitErr = "";
	$name = $address = $email = $howMany = "";
	$favFruit = array();
	$hasErrors = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Missing";
			$hasErrors = true;
		}
		else {
			$name = $_POST["name"];
		}

		if (empty($_POST["address"])) {
			$addrErr = "Missing";
			$hasErrors = true;
		}
		else {
			$address = $_POST["address"];
		}

		if (empty($_POST["email"]))  {
			$emailErr = "Missing";
			$hasErrors = true;
		}
		else {
			$email = $_POST["email"];
		}

		if (!isset($_POST["howMany"])) {
			$howManyErr = "You must select 1 option";
			$hasErrors = true;
		}
		else {
			$howMany = $_POST["howMany"];
		}

		if (empty($_POST["favFruit"])) {
			$favFruitErr = "You must select 1 or more";
			$hasErrors = true;
		}
		else {
			$favFruit = $_POST["favFruit"];
		}

		if (!$hasErrors) {
			// process accepted form values here
			echo '<h1>Thank you</h1>';

			echo $name . "<br>";
			echo $address . "<br>";
			echo $email . "<br>";
			echo $howMany . "<br>";
			echo "Fructele dvs favorite sunt: ";
			foreach ($favFruit as $fruit) {
				echo $fruit . ",";
			}
		}
	}

	if ($_SERVER["REQUEST_METHOD"] == "GET"  || $hasErrors)
	{
		?>
		<h1>The World of Fruit</h1>
		<h2>Fruit Survey</h2>
		<form method="POST"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="name">Name</label>
		<input id="name" type="text" name="name" 
		value="<?php echo htmlspecialchars($name);?>">
		<span class="error"><?php echo $nameErr; ?></span><br>
		<label for="address">Address</label>
		<input id="address" type="text" name="address" 
		value="<?php echo htmlspecialchars($address);?>">
		<span class="error"><?php echo $addrErr; ?></span><br>
		<label for="email">Email</label>
		<input id="email" type="email" name="email" 
		value="<?php echo htmlspecialchars($email);?>">
		<span class="error"><?php echo $emailErr; ?></span><br>
		<label>How many pieces of fruit do you eat per day?</label>
		<div class="radioSet">
			<input type="radio" id="howMany_0" name="howMany"
			<?php if (isset($howMany) && $howMany == "zero") echo "checked"; ?>
			value="zero">
			<label for="howMany_0">0</label>
			<span class="error"><?php echo $howManyErr; ?></span><br>
			<input type="radio" id="howMany_1" name="howMany"
			<?php if (isset($howMany) && $howMany == "one") echo "checked"; ?>
			value="one">
			<label for="howMany_1">1</label><br>
			<input type="radio" id="howMany_2" name="howMany"
			<?php if (isset($howMany) && $howMany == "two") echo "checked"; ?>
			value="two">
			<label for="howMany_2">2</label><br>
			<input type="radio" id="howMany_x" name="howMany"
			<?php if (isset($howMany) && $howMany == "twoplus") echo "checked"; ?>
			value="twoplus">
			<label for="howMany_x">More than 2</label>
		</div>
		<br>
		<label for="favFruit">My favorite fruit</label>
		<select id="favFruit" name="favFruit[]" size="2" multiple>
			<?php
			$options = array("apple", "banana", "plum", "pomegranate",
				"strawberry", "watermelon");
			foreach ($options as $option) {
				echo '<option value="' . $option . '"';
				if (in_array($option, $favFruit)) {
					echo " selected";
				}
				echo ">" . ucfirst($option) . "</option>";
			}
			?>
		</select>
		<span class="error"><?php echo $favFruitErr; ?></span>
		<br>
		<label for="">Would you like a brochure?</label>
		<input id="brochure" type="checkbox" name="brochure" value="Yes">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
}
?>
</body>
</html>