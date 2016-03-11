<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sort Array</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="style.css">
<style>
	.wrap {
		max-width: 920px;
		margin: 20px auto;
		overflow: hidden;
		padding: 5px;
	}

	.box {
		width: 33%;
		float: left;
		padding: 20px;
		box-sizing: border-box;
	}
</style>
</head>
<body>
<div class="wrap">
		
		
	<div class="box">
		<h3>Initial array:</h3>
		<?php
			$a1 = array(
				20, 13, 56, 89, 32, 3, 120, 590, 54,
				'44', '77', 'ceva', 'alt', 1, 2, 'bine',
				'Bine', '1Doi', 0, false, true, 800, 467, -20, -56, -1203, 'alba',
				);
			var_dump($a1);
		?>
	</div><!-- box -->

	
	<div class="box">
		<h3>asort() array:</h3>
		<?php 
			asort($a1);
			var_dump($a1);
		?>
	</div><!-- box -->
	
	
	<div class="box">
		<h3>arsort() array:</h3>
		<?php 
			reset($a1);
			arsort($a1);
			var_dump($a1);

			// foreach ($a1 as $key => $value) {
			// 	echo "Key: " . $key . ": Value: " . $value . "<br>";
			// }
		?>
	</div><!-- box -->

	<div class="box">
		<h3>natsort() array:</h3>
		<?php 
			natsort($a1);
			var_dump($a1);
		?>
	</div><!-- box -->

	<div class="box">
		<h3>ksort() array:</h3>
		<?php 
			ksort($a1);
			var_dump($a1);
		?>
	</div><!-- box -->

</div><!-- wrap -->
</body>
</html>