<?php

// test email reg ex

$email = '-23dfdfdfdgmdf.ere@yahoo.doman.com';

// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
//     echo $email . "<br>Email invalid!";
// } else {
// 	echo $email . "<br> este un email valid!";
// }

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	echo $email . "<br>Email invalid!";
} else {
	echo $email . "<br> este un email valid!";
}