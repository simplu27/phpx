<?php 

function media_aritmetica() {
	$suma = '';

	// Functia func_num_args() intoarce numarul de argumente din functia media_aritmetica()
	$items = func_num_args();

	for ($i=0; $i < $items; $i++) {

		$suma += func_get_arg($i);

		$indecsi = func_get_arg($i) . ", ";

	}

	// Aflam media, impartind suma la nr. de $items

	$media = $suma / $items;

	echo $indecsi;
	echo $media;

} // functia media_aritmetica

media_aritmetica(20, 14);

?>