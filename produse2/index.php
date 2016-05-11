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
		margin: 0;
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
			?>

		<div class="box">
			<h3><?php echo $nume; ?></h3>
			<p>Pret: <?php echo $pret; ?> Lei</p>
			<p>Descriere: <?php echo $descriere; ?></p>
			<p>Cod produs: <?php echo $cod; ?></p>
			<p>URL produs: <?php echo $url; ?></p>
			<!-- produs.php?prod=link-here
			<a href="produs/link-here">Detalii</a> -->
			<a href="produs/<?php echo $url; ?>">Detalii</a>
		</div><!-- box -->

		<?php } // end foreach
		 ?>
		
	</div><!-- center -->

</body>
</html>