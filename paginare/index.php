<?php

// Paginare simpla in php

// Includem datele de paginat: array-ul $date

include_once('date.php');

// Pagina de start: 1
	$pagina = 1;
// Cate elemente se afiseaza pe pagina
	$elemente_pe_pagina = 10;

// Cate elemente sunt in array [Returneaza 100, in acest caz]
$total_elemente = count($date);
// Afla nr. total de pagini si rotunjeste in sus
$total_pagini = ceil($total_elemente / $elemente_pe_pagina);

// Initial, $pagina = 1. Daca e setata pagina in url, preia pagina
// Doar daca e mai mare ca zero si mai mica sau egala cu nr. total de pagini
if (isset($_GET['pagina']) && $_GET['pagina'] > 0 && $_GET['pagina'] <= $total_pagini) {
	$pagina = $_GET['pagina'];
} else {
	// Daca nu sunt indeplinite conditiile, $pagina = 1.
	$pagina = 1;
}

// De unde se porneste afisarea ($start)
// Daca pagina=2 si se afiseaza 2 elemente pe pagina:
// $start = (2-1)*2 = 2 . Deci, se afiseaza elementele 2 si 3 din array
$start = ($pagina - 1) * $elemente_pe_pagina;

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Paginare PHP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="style.css">
</head>
<body>
<div class="wrap">
	
	<div class="header">
		<h1>Paginare PHP</h1>
		<span class="info">Pagina <?php echo $pagina; ?> din <?php echo $total_pagini; ?>.
		Maxim <?php echo $elemente_pe_pagina; ?> elemente/pagina.
		Elemente in array: <?php echo $total_elemente; ?>
		</span>
	</div>

	<?php
	/*
		Daca e pagina 2 si se arata 2 elemente pe pagina, arata doar elementele 3 si 4
		Daca e pagina 3 si se arata 2 elemente pe pagina, arata doar elementele 5 si 6
	*/

	// Care elemente se arata pe pagina
	$elemente_de_aratat = ($elemente_pe_pagina + $start);

	/* 
		In cazul in care nr. de elemente setat sa se afiseze pe pagina
		este impar, iar totalul elementelor este par, apare o eroare la ultima pagina,
		in incercarea de a afisa si elemente care nu exista.
		Pentru a preveni asta, daca pagina curenta este egala cu nr. total de pagini 
		(deci este ultima pagina), limiteaza elementele de afisat doar la cele ce exista
	*/

	if ($pagina == $total_pagini) {
		$elemente_de_aratat = $total_elemente;
	}

	echo '<div class="box-container">';

	for ($i = $start; $i < $elemente_de_aratat; $i++) {

		echo '<div class="box">';
			echo 	"Id: " 			. $date[$i]['id'] 		. "<br>";
			echo 	"Name: " 		. $date[$i]['name'] 	. "<br>";
			echo 	"Phone: " 		. $date[$i]['phone'] 	. "<br>";
			echo 	"E-Mail: " 		. $date[$i]['email'] 	. "<br>";
			echo 	"Country: " 	. $date[$i]['country'] 	. "<br>";
		echo '</div>';

	} // for

	echo '</div>';
	?>

	<div class="paginare">

		<?php

			echo '<a href="./?pagina=1">Prima pagina</a>';

			for ($i=1; $i <= $total_pagini; $i++) { 
				// Adauga classa active pentru css
				if($pagina == $i) {
					echo '<a class="active" href="./?pagina=' . $i . '">' . $i . '</a>';
				} else {
					echo '<a href="./?pagina=' . $i . '">' . $i . '</a>';
				}
			}
			echo '<a href="./?pagina=' . $total_pagini . '">Ultima pagina</a>';

		?>
	</div>

</div><!-- wrap -->
</body>
</html>