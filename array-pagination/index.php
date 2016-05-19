<?php
// include fisierul cu produse:
include_once('data.php');
// array(
// 	"id"=>1,
// 	"name"=>"Mia",
// 	"data"=>"Aliquet vel, vulputate eu, odio.",
// 	"price"=>981
// 	)
$total = count($data); // aflam numarut total al produselor. returneaza 100
$limit = 8; // cate produse se arata pe pagina

// Afla numarul total de pagini:
// Se imparte numarul total de produse la numarul de produse afisate pe o pagina
// ceil() rotunjeste numarul de pagini
$pages = ceil($total / $limit); // returneaza 10 pagini

	// Daca e setat numarul paginii, daca este mai mic decat numarul total de pagini
	// si daca este un numar, se preia numarul paginii [$page]
	if (isset($_GET['page']) && $_GET['page'] <= $pages && $_GET['page'] >=1 && is_numeric($_GET['page'])) {
		// Se preia numarul paginii din link
		// De ex: index.php?page=2
		$page = $_GET['page'];
	} else {
		// Daca nu sunt indeplinite conditiile de mai sus, seteaza pagina 1	
		// index.php?page=1
		$page = 1;
	}

// Aflam de la cat se pleaca, in functie de numarul paginii:
// Ex: Pag 1 * 10 per pag - 10 = 0 [pentru prima pagina]
// Ex: Pag 2 * 10 per pag - 10 = 10 [pentru pagina 2]
$current_start = ($page * $limit) - $limit ;
// Metoda alternativa:
// $current_start=($page-1)*$limit;
// Daca $limit = 10 [Daca se afiseaza 10 item/pagina]
// pag 1: (1-1)*10=0 [se porneste de la 0]
// pag 2: (2-1)*10=10 [se porneste de la 10]
// pag 3: (3-1)*10=20 [se porneste de la 20]

// array_slice($array cu date, cu ce se incepe, cate se arata pe pagina, daca se pastreaza indexul)
// TRUE pastreaza indexul fiecarui array
$online = array_slice($data, $current_start, $limit, TRUE);
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Array pagination</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center">

	<h2>Array pagination</h2>
	<br>
	<?php
		// Detalii, doar pentru testare:
		// Pagina: 12 din 13
		echo "Pagina: " . $page . " din " . $pages . "<br>"; 
		// Total items: 100. Se afiseaza [maxim] 8 items per pagina
		echo "Total items: " . $total . ". Se afiseaza [maxim] " . $limit . " items per pagina <br>";
		echo "<br>";

		// Afisam detalii despre produse:

		foreach ($online as $key => $value) {
			$id = $data[$key]['id'];
			$nume = $data[$key]['name'];
			$pret = $data[$key]['price'];
			$url = $data[$key]['url'];
			?>

		<div class="box">
			<p>Key: <?php echo $key; ?> Id: <?php echo $id; ?></p>
			<p>Nume: <?php echo $nume; ?></p>
			<p>Pret: <?php echo $pret; ?> $</p>
			<p>Url: <?php echo $url; ?></p>
			<p><a href="single/index.php?prod=<?php echo $url; ?>">Detalii</a></p>
		</div>

		<?php
		} // end foreach 
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