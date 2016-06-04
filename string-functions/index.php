<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>String Functions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="style.css">
</head>
<body>
<h2>trim()</h2>
<p>Inlatura spatiile goale de la inceputul si sfarsitul unui string</p>
<?php
// trim() 

$string = '   Lorem ipsum dolor sit amet, consectetur adipisicing elit.   ';

echo "<pre>";
	var_dump($string);
echo "</pre>";

$string1 = trim($string);

echo "<pre>";
	var_dump($string1);
echo "</pre>";
?>

<h2>stripslashes()</h2>
<p>stripslashes — Un-quotes a quoted string</p>

<?php
$str = "Is your name O\'reilly?";

echo "Initial string: <br>";
echo $str . '<br><br>';
// Outputs: Is your name O'reilly?
echo "Dupa stripslashes(): <br>";
echo stripslashes($str);
?>

</body>
</html>