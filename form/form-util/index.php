<?php 

// trim: inlatura spatiile libere
// de la inceputul si sfarsitul unui string

$string1 = "   This    is a text   ";

// echo $string1;
echo trim($string1);

echo "<br>";
///////////////////////////////////////

$string2 = '<p>This is \\ a paragraph!</p>';

echo stripslashes($string2);

echo "<br>";


//////////////////////////////

$email = "mywmaldld";

$emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);

echo $emailValid;

?>