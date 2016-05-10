<?php

// produse2/index.php
// Pagina cu toate produsele

include('produse.php');

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Produse</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	*, *:before, *:after {
		box-sizing: border-box;
	}
	.center {max-width: 800px; margin: 10px auto;}
	.box {width: 33.33%; padding: 10px; margin-bottom: 20px; float: left;}
	.h3 {margin: 0 0 5px 0 !important;}
</style>
</head>
<body>

	<div class="center">

		<h1>Toate produsele</h1>

		<?php
		foreach ($produse as $key => $produs) {
			$nume = $produs['nume'];
			$pret = $produs['pret'];
			$cod = $produs['cod'];
			$descriere = $produs['descriere'];
			$url = $produs['url'];

			// Genereaza continutul pentru fiecare produs:
			$content = '<div class="box">';
			$content .= '<h3>'. $nume . '</h3>';
			$content .= 'Pret: '. $pret . ' Lei' . "<br>";
			$content .= 'Descriere: '. $descriere . "<br>";
			$content .= 'Cod: '. $cod . "<br>";
			$content .= 'Url: '. $url . "<br>";
			$content .= '<a href="'. 'produs.php?prod='. $url .'">Detalii</a>' . "<br>";
			$content .= '</div>';

			// Afiseaza produsele:
			echo $content;
		} ?>
	</div><!-- center -->

</body>
</html>

