<?php

include('data.php');

// echo "<pre>";
// 	var_dump($tablouri);
// echo "<pre>";

echo "<hr>";

foreach ($tablouri as $key => $tablou) {
	echo "Url frumos pentru <strong>" . $tablou['title'] .
	"</strong> este: " . url_frumos($tablou['title']) . "<br>";
}


// foreach ($tablouri as $key => $tablou) {
// 	if($tablou['title'] == 'Fetita in rosu'){
// 		echo $key;
// 	}
// }