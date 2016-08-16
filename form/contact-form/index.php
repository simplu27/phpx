<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Form 2016</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="style.css">
</head>
<body>

<div class="center">
	<?php 
// functie care testeaza valorile
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// initializare varialbile
$nume = $email = $telefon = $mesaj = $hidden = "";
$numeErr = $emailErr = $telefonErr = $mesajErr = $hiddenErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// daca campul ascun este completat, redirectioneaza
	// doar pentru roboti
	if (!empty($_POST['hidden'])) {
		header('Location: http://www.google.ro');
		exit();
	}

	// nume
	if (empty($_POST['nume'])) {
		$numeErr = "Numele trebuie completat";
	} elseif (strlen($_POST['nume']) < 3) {
		$numeErr = "Numele este prea scurt!";
	} else {
		$nume = test_input($_POST['nume']);

		if (!preg_match("/^[a-zA-Z ]*$/", $nume)) {
			$numeErr = "Doar literele si spatii sunt permise!";
		}
	}

	// email
	if (empty($_POST['email'])) {
		// Daca email este necompletat
		$emailErr = "Emailul trebuie completat";
	} elseif(!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === FALSE) {
		// daca este completat, dar nu este email valid
		$emailErr = "Se pare ca emailul nu este valid!";
	} else {
		$email = test_input($_POST['email']);
	}

	// telefon
	if (empty($_POST['telefon'])) {
		$telefonErr = "Telefonul trebuie completat";
	} 
	else {
		$telefon = test_input($_POST['telefon']);
		if (!is_numeric($telefon)) {
			$telefonErr = "Doar cifre, va rugam!";
		}
		if (is_numeric($telefon) && strlen($telefon) < 5) {
			$telefonErr = "Cam scurt telefonul!";
		}
	}

	// mesaj
	if (empty($_POST['mesaj'])) {
		$mesajErr = "Mesajul trebuie completat";
	} else {
		$mesaj = test_input($_POST['mesaj']);
	}

	if (empty($numeErr) && empty($telefonErr) && empty($emailErr) && empty($mesajErr)) {
		// Daca nu este nici o eroare, se poate trimite mailul
		// Altfel, se intoarce la formular
		// echo "<h2>Mesajul a fost trimis trimis</h2>";
		// curata campurile completate
		// $_POST = array();

		// sau redirectioneaza spre pagina cu mesajul de succes
		header('Location: success.php');
		exit();

	} else {
		echo "<h2>Contact Form 2016</h2>";
	}
}

include_once 'form.php';
?>
</div><!-- center -->

</body>
</html>