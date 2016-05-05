<?php
// Pagina cu toate produsele: index.php
// Include arrayul cu produse:
include('lista-produse.php');
/*echo "<pre>";
	var_dump($produse);
echo "<pre>";*/
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Toate produsele</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> h1 {margin-bottom: 40px;}
.wrap {max-width: 600px; margin: 20px auto; }
.box {width: 50%; float: left; box-sizing: border-box; margin-bottom: 30px; }
h3 {margin: 0;} p {margin: 0;} </style>
</head>
<body>
<div class="wrap">
	<h1>Toate produsele</h1>
	<?php 

		var_dump($produse);

		foreach ($produse as $key => $produs) {
			$nume_produs = $produs['nume'];
			$pret = $produs['pret'];
			$url = $produs['complex_url'];
		?>
			<div class="box">
				<h3><?php echo $nume_produs; ?></h3>
				<p>Pret: <?php echo $pret; ?> Lei</p>
				<!-- <a href="produs.php?produs=<?php echo $url; ?>">Detalii produs</a> -->
				<a href="produs/<?php echo $url; ?>">Detalii produs</a>
			</div>
		<?php } // end foreach
		?>
</div><!-- wrap -->
</body></html>
