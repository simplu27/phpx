<?php

// Tablouri

// Include array $tablouri din data.php
include('data.php');

// echo '<pre>';
// 	print_r($tablouri);
// echo '</pre>';

foreach ($tablouri as $id => $tablou) {
	$img = "img/" . $tablou['img'];
	$title = $tablou['title'];
	$pret = $tablou['pret'];
	?>
	
	<div class="box" style="max-width: 30%; float: left; padding: 20px; box-sizing: border-box;">
		<img style="max-width: 100%; height: auto;" src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
		<h3><?php echo $title; ?></h3>
		<p>Pret: <?php echo $pret; ?></p>
		<!-- <a href="tablou.php?id=<?php echo $id; ?>">Detalii by ID</a><br> -->
		<a href="tablou.php?name=<?php echo url_frumos($title); ?>">Detalii by name</a>
	</div>

<?php } ?>
