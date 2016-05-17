<?php

include_once('data.php');

// array(
// 	"id"=>1,
// 	"name"=>"Mia",
// 	"data"=>"a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum",
// 	"price"=>981
// 	)
$total = count($data); // return 100
$limit = 8; // cat se arata
$start = 0; // de la cat se pleaca
$page = ''; // pagina

// Afla numarul total de pagini:
// ceil() rotunjeste numarul de pagini
$pages = ceil($total / $limit); // returneaza 10 pagini

	if (isset($_GET['page']) && $_GET['page'] <= $pages && $_GET['page'] >=1 && is_numeric($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}

// Aflam de la cat se pleaca, in functie de numarul paginii:
// Ex: Pag 1 * 10 per pag - 10 = 0 [pentru prima pagina]
// Ex: Pag 2 * 10 per pag - 10 = 10 [pentru pagina 2]
$current_start = ($page * $limit) - $limit ;



// array_slice($array, cu ce se incepe, cate se arata)
$online = array_slice($data, $current_start, $limit, TRUE);

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Array pagination</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	*, *:before, *:after {box-sizing: border-box; margin: 0; padding: 0; }
	.clearfix, .clearfix:before, .clearfix:after {
		clear: both;
		overflow: hidden;
	}
	.center {
		max-width: 800px;
		margin: 20px auto;
		padding: 10px 20px;
	}

	
	.box {width: 25%; float: left; /*margin: 10px 2%;*/ padding: 10px; }
	@media screen and (max-width: 480px) {
		.box {width: 50%;}
	} /* 480px media end */

	.paginare {margin-top: 30px; margin-bottom: 20px;}
	.paginare a {
		background: #EFEFEF;
		border: 1px solid #DFDFDF;
		margin: 4px 2px;
		padding: 3px 7px;
		text-decoration: none;
		display: inline-block;
		border-radius: 4px;
	}
	a.current-page,
	.paginare a:hover {background: #5F5F5F; color: #F9F9F9;}

	/*a.prev,
	a.next {
		margin-bottom: 10px;
		display: inline-block;
	}*/

</style>
</head>
<body>
<div class="center">

	<h2>Array pagination</h2>
	<br>

	<?php
		echo "Pagina: " . $page . " din " . $pages . "<br>";
		echo "Total items: " . $total . ". Se afiseaza [maxim] " . $limit . " items per pagina <br>";
		echo "<br>";
		// echo "<pre>";
		// 	var_dump($online);
		// echo "</pre>";

		foreach ($online as $key => $value) {
			echo '<div class="box">';
			echo "Key: " . $key . " ID: " . $data[$key]['id'] . "<br>";
			echo "Nume: " . $data[$key]['name'] . "<br>";
			echo "Pret: " . $data[$key]['price'] . " $<br>";
			echo "</div>";
		}

	?>	
		<div class="clearfix"></div>
		<hr>


	<div class="paginare">

		<?php 
			// Aflam linkul catre pagina anterioara,
			// in functie de pagina curenta [$page] si nr. total de pagini [$pages]
			if ($page > 1 && $page <= $pages) {
				$prev_page = $page - 1;
			} else {
				// Daca ne aflam pe pag 1, trimitem catre ultima pagina
				$prev_page = $pages;
			}

			// Aflam linkul catre pagina urmatoare:
			if ($page == $pages) {
				$next_page = 1;
			} else {
				$next_page = $page + 1;
			}
		?>

		<a href="index.php?page=<?php echo $prev_page; ?>" class="prev">Prev</a>

		<?php 
			// Generare linkuri catre pagini:
			// Total pagini:
			// $pages = ceil($total / $limit);

			for ($i=1; $i <= $pages ; $i++) { 
				if ($i == $page) {
					echo '<a class="current-page" href="index.php?page='. $i .'">'. $i .'</a>' . "&nbsp";
				} else {
					echo '<a href="index.php?page='. $i .'">'. $i .'</a>' . "&nbsp";
				}
				
			}
		?>
		<a href="index.php?page=<?php echo $next_page; ?>" class="next">Next</a>
	</div><!-- paginare -->
		
	

</div><!-- center -->
</body>
</html>