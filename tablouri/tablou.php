<?php 

include('data.php');

/*
	if (isset($_GET['id'])) {
		$getid = $_GET['id'];
	}


	if (isset($tablouri[$getid])) {
		$tablou = $tablouri[$getid];
	} else {
		header('location: index.php');
		exit();
	}
*/

	// tablou.php?name=fetita-in-rosu

		

	foreach ($tablouri as $key => $value) {

		if (isset($_GET['name'])) {
				$getname = $_GET['name'];
				// $getname = 'fetita-in-rosu';
				
					if (strtolower(str_replace(' ', '-', $value['title'])) == $getname) {
						$produs = $tablouri[$key];
						echo "Title: " . $produs['title'] . "<br>";
						echo "Pictor: " . $produs['autor'] . "<br>";
						echo "Cod: " . $produs['cod'] . "<br>";
						echo "Pret: " . $produs['pret'] . "<br>";
						echo "Img: " . $produs['img'] . "<br>";
					}//  else {
					// 	echo "Nu este nici un tablou cu acest nume!";
					// }

			} // isset($_GET['name'])
		
	} //foreach

// echo "Numele tabloului este: " . $tablou['title'];