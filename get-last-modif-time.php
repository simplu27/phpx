<?php

// __FILE__ este numele fisierului curent;

// Set time to local
date_default_timezone_set('Europe/Bucharest');

/*
	H 	Ora 00-23		Y 	Anul 2016
	i 	Minute 45		d 	Ziua 01-31
	s 	Secunde 35		F 	Luna March 		
						m 	Luna (numeric) 01-12
						M 	Luna (prescurtat): Jan, Dec
*/

echo "Ultima modificare a fost efectuata la:<br>"
.date("d M Y H:i:s.",filemtime(__FILE__));

/////////////////////////////////////////////////////////////////

echo "<hr>";

echo "Timpul curent este: <br>";
echo date(DATE_RFC2822);

echo "<hr>";

/////////////////////////////////////////////////////////////////
?>

<!-- Ultima modificare: <?php echo date("d M Y H:i:s.",filemtime(__FILE__)); ?> -->