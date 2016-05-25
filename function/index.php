<?php 

function media_aritmetica() {
	$suma = '';
	$indecsi = '';
	$cifre = '';

	// Functia func_num_args() intoarce numarul de argumente din functia media_aritmetica()
	$items = func_num_args();

	for ($i=0; $i < $items; $i++) {

		$suma += func_get_arg($i);

		if ($i == ($items - 1)) {
			$indecsi .= func_get_arg($i);
			$cifre .= func_get_arg($i);
		} else {
			$indecsi .= func_get_arg($i) . ", ";
			$cifre .= func_get_arg($i) . "+";
		}
	}

	// Aflam media, impartind suma la nr. de $items

	$media = $suma / $items;

	echo "Media aritmetica pentru <strong>" . $indecsi . "</strong> este <strong>" . $media . "</strong><br>";
	echo "<strong>(" . $cifre . ") / ". $items ."</strong> = <strong>" . $media . "</strong><br>";
	// echo $indecsi;
	// echo "<br>";
	// echo $media;

} // functia media_aritmetica

media_aritmetica(20, 14, 6, 0, 40);

echo "<br>";

media_aritmetica(3, 5, 68, 1680);






?>