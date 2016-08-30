<?php 

// fwrite()
// write text to a file:

$file = 'lorem.txt';
// deschide fisierul
// a = append (scrie dupa ultima linie si creeaza fisierul daca nu exista)
$handle = fopen($file, 'a');

if (isset($_POST['submit'])) {
	$name = $_POST['name'];

	// echo "Namme to be written: " . $name . "<br>	";
	// daca nu este competat nici un nume
	if (empty($name)) {
		echo "Va rugam completati un nume! <br>";
	} else {
		// daca numele este completat, scrie-l in fisierul lorem.txt
		fwrite($handle, $name . "\t" . date('d.m.Y G:i:s') . "\n");
		echo "Numele '" . $name . "' a fost adaugat la lista! <br>";
	}
}
// inchide fisierul
fclose($handle);
?>

<form action="index.php" method="POST">
	Completati numele de adaugat in fisier: <br>
	<input type="text" id="name" name="name">
	<input type="submit" name="submit" value="Trimite">
</form>
<br>

<?php 

// Afiseaza numele din lorem.txt
echo "<h3>Numele deja scrise in fisier</h3>";
$file = fopen("lorem.txt","r");

// feof — Tests for end-of-file on a file pointer
while(! feof($file)) {
	// fgets - gets a line from file pointer. 
	echo fgets($file) . "<br>";
}

fclose($file);
?>