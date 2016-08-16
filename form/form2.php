<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

	<?php
// define variables and set to empty values
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$website = test_input($_POST["website"]);
		$comment = test_input($_POST["comment"]);
		$gender = test_input($_POST["gender"]);
	}

	function test_input($data) {
		// Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
		$data = trim($data);
		// Remove backslashes (\) from the user input data (with the PHP stripslashes() function)
		$data = stripslashes($data);
		// The htmlspecialchars() function converts special characters to HTML entities
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

	<h2>PHP Form Validation Example</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		<p><label for="name">Name: </label><input type="text" name="name" placeholder="De ex: Popescu Florin"></p>
		<p><label for="email">E-mail: </label><input type="text" name="email" placeholder="Ex: popescuf@yahoo.com"></p>
		<p><label for="website">Website: </label><input type="text" name="website" placeholder="www.yoursite.com"></p>
		<p><label for="comment"></label><textarea name="comment" rows="5" cols="40"></textarea></p>
		<p><label for="gender">Gender: </label>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male</p>
		<p><input type="submit" name="submit" value="Submit"></p>  
	</form>

	<?php
		// if (isset($_POST['submit'])) {
		// 	echo "<h2>Your Input:</h2>";
		// 	echo $name;
		// 	echo "<br>";
		// 	echo $email;
		// 	echo "<br>";
		// 	echo $website;
		// 	echo "<br>";
		// 	echo $comment;
		// 	echo "<br>";
		// 	echo $gender;
		// }

	echo "<pre>";
		var_dump($_POST);
	echo "</pre>";
	?>

</body>
</html>