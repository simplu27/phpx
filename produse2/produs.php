<?php 

// Includem $produse:
include('produse.php');

// Punem intr-o variabila pagina cu toate produsele
// Necesar pentru redirectionare si link catre toate produsele
$produsePage = 'index.php';

// Pagina cu un singur produs: produs.php
// Linkul catre pagina:
// http://test-php.dev/produse2/produs.php?prod=produsul-unu-p001

// Preia produsul prin GET:
	if (isset($_GET['prod'])) {
		$prod = $_GET['prod']; // returneaza: produsul-unu-p001

		// Verifica daca $prod se afla in $produse:

		if (array_search($prod, array_column($produse, 'url')) !== FALSE) {
			// Daca cautarea $prod in $produse nu returneaza FALSE
			// Aflam indexul in care se afla $prod si in punem in variabila $key
			$key = array_search($prod, array_column($produse, 'url'));

			// Daca $prod a fost gasit in $produse, array_search returneaza indexul din array
			// astfel, stabilim produsul:

			$produs = $produse[$key];

		} else {
			// daca cautarea in array $produse returneaza FALSE (produsul nu exista)
			// se afiseaza pagina cu toate produsele
			header('Location:'.$produsePage);
			exit();
		}
	} else {
		// daca nu este setat produsul:
		// se redirectioneaza catre pagina cu toate produsele
		header('Location:'.$produsePage);
		exit();

	}

	// Daca $produs este setat, se pregateste continutul:

	$nume = $produs['nume'];
	$pret = $produs['pret'];
	$cod = $produs['cod'];
	$descriere = $produs['descriere'];
	$url = $produs['url'];

	// Genereaza continutul pentru fiecare produs:
	$content  = '<h2>'. $nume . '</h2>';
	$content .= 'Pret: '. $pret . ' Lei' . "<br>";
	$content .= 'Descriere: '. $descriere . "<br>";
	$content .= 'Cod: '. $cod . "<br>";
	$content .= 'Url: '. $url . "<br>";

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $nume ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	*, *:before, *:after {
		box-sizing: border-box;
	}
	.center {max-width: 800px; margin: 10px auto;}

	.prod-nav {
		margin: 10px 0;
	}

	.box {width: 50%; padding: 10px; margin-bottom: 20px; float: left;}
	.h3 {margin: 0 0 5px 0 !important;}
</style>
</head>
<body>
	
<div class="center">
	<div class="box">
		<?php 
			echo $content . "<br>";
		 ?>

		 <?php 
				$totalProduse = count($produse);
				echo "Total produse: " . $totalProduse . "<br>"; // return 5

				$currentKey = $key;
				echo "Current key is: " . $currentKey . "<br>";

				$nextKey = $currentKey + 1;
				$prevKey = $currentKey - 1;

				echo "Prev key is: " . $prevKey . "<br>";
				echo "Next key is: " . $nextKey . "<br>";
			?>
		
		<div class="prod-nav">

		<?php 
			// Afiseaza link catre produsul anterior, doar daca produsul curent nu este primul produs din array
			if ($currentKey >= 1) {
				$prevUrl = "produs.php?prod=" . $produse[$prevKey]['url'];
				echo '<a href="' . $prevUrl . '">Produsul anterior</a> | ';
			}
		?>
			<a href="<?php echo $produsePage; ?>">Toate produsele</a>

		<?php 
			// Afiseaza link catre produsul urmator, doar daca produsul curent nu este ultimul produs din array
			if ($currentKey < ($totalProduse - 1)) {
				$nextUrl = "produs.php?prod=" . $produse[$nextKey]['url'];
				echo ' | <a href="' . $nextUrl . '">Produsul urmator</a>';
			}
		?>

		</div><!-- prod-nav -->

	</div><!-- box -->
</div><!-- center -->
	
</body>
</html>




