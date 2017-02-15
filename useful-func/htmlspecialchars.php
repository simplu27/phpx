<?php

// htmlspecialchars — Convert special characters to HTML entities
 // htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )

// htmlspecialchars(string, FLAG, charset);

// Functie care converteste caracterele HTML
// ENT_QUOTES 	Will convert both double and single quotes.

// SOURCE:
// https://www.youtube.com/watch?v=GPAO5yiCbNk&index=1&list=PLfdtiltiRHWEWgOj2fh47higKP9Svp93V
// CodeCourse: Properly Escaping Output in PHP to Prevent XSS Attacks 

function escape($string){
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$string = "String plus <script>alert('Hello')</script>";

echo escape($string);

// RETURN:
// String plus &lt;script&gt;alert(&#039;Hello&#039;)&lt;/script&gt;

echo "<br>\n";

$franceza_caractere = "à, é, ç, ô, û, ê";

echo "htmlspecialchars: " . htmlspecialchars($franceza_caractere);
echo "<br>\n";
echo "htmlentities: " . htmlentities($franceza_caractere);
echo "<br>\n";

