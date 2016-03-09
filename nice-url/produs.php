<?php
// Pagina pentru un singur produs: produs.php
// Include arrayul cu produse:
include('lista-produse.php');

if (isset($_GET['produs'])) {
	$get_produs = $_GET['produs'];
	if (array_search($get_produs, array_column($produse, 'url')) !== false) {
		$key = array_search($get_produs, array_column($produse, 'url'));
		$produs = $produse[$key];
	} else {
		header('Location:index.php');
		exit();
	}
} else {
		header('Location:index.php');
		exit();
	}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo isset($produs['nume']) ? $produs['nume'] : "Page Title"; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	*, *:before, *:after {box-sizing: border-box;}
	body {color: #343434;}
 	.wrap {max-width: 600px; margin: 20px auto;}
	.center {width: 100%; margin: 10px auto; /*text-align: center;*/}
	pre {white-space: pre-wrap; word-wrap: break-word; background: #F2F9FC;}
	code pre {padding: 10px; font-family: Consolas; font-size: 12px; max-width: 100%; word-break: auto; display: block;}
	.nav {background: #F9F9F9; padding: 20px; margin-top: 20px; position: relative; overflow: hidden;}
	.prev, .next {padding: 5px 10px;}
</style>
</head>
<body>
	<div class="wrap">

		<div class="center">
			<span><a href="index.php">&laquo; Toate produsele</a></span><br>
			<span>Produs key: <?php echo $key; ?></span>
		</div>

		<h1><?php echo isset($produs['nume']) ? $produs['nume'] : "Produs"; ?></h1>
		<p>Pret: <?php echo $produs['pret']; ?> Lei</p>
		<p>Cod produs: <?php echo $produs['cod']; ?></p>
		<p><strong>Descriere produs:</strong> <?php echo $produs['descriere-produs']; ?></p>

		<div class="nav">
			<?php 
				$total_produse = count($produse); // 4

				$prod_curent = $key;
				$prod_prev = $key-1;
				$prod_next = $key+1;

				// echo $produse[$prod_curent]['url'] . "<br>";
				// echo $produse[$prod_prev]['url'] . "<br>";
				// echo $produse[$prod_next]['url'] . "<br>";

				if ($prod_prev >= 0) {
					$prev_url = $produse[$prod_prev]['url'];
					$prev_nume = $produse[$prod_prev]['nume'];
					echo '<a class="nav-link prev" href="produs.php?produs=' . $prev_url . '">&laquo; ' . $prev_nume . '</a>';
				} else {
					echo "Acesta este primul produs!";
				}

				if ($prod_next < $total_produse) {
					$next_url = $produse[$prod_next]['url'];
					$next_nume = $produse[$prod_next]['nume'];
					echo '<a class="nav-link next" href="produs.php?produs=' . $next_url . '">' . $next_nume . ' &raquo;</a>';
				} else {
					echo "Acesta este ultimul produs!";
				}
			 ?>
		</div>
<code><pre>
var_dump($produs);
<?php var_dump($produs);?>
</pre></code>
</div><!-- wrap -->
</body></html>

