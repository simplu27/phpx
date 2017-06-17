<?php

function first_function() {
	echo "I'm a function";
}

if(function_exists('first_function2')) {
	echo "Functia exista!";
} else {
	echo "Functia NU exista!";
}