<?php

function redirect_to($noua_locatie){
	header("Location: " . $noua_locatie);
	exit;
}

// redirect_to('another-page.php');