<?php 

// afiseaza continutul unui director:

$dir = 'test-folder';



if (is_dir($dir)) {
	$dir_array = scandir($dir);

	foreach ($dir_array as $file) {
		if ($file != '.' && $file != '..') {
			echo $file . '<br>';
		}
	}
}

echo "<pre>";
	var_dump($dir_array);
echo "</pre>";

echo "<hr>";

// http://stackoverflow.com/questions/7121479/listing-all-the-folders-subfolders-and-files-in-a-directory-using-php

function listFolderFiles($myfolder){
    $ffs = scandir($myfolder);
    echo '<ul>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..') {
            echo '<li>'.$ff;
            if(is_dir($myfolder.'/'.$ff)) listFolderFiles($myfolder.'/'.$ff);
            echo '</li>';
        }
    }
    echo '</ul>';
}

listFolderFiles(dirname('.'));



echo "<hr>";


// http://stackoverflow.com/questions/24783862/list-all-the-files-and-folders-in-a-directory-with-php-recursive-function

function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        // $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        $path = $value;
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}

$scaneaza = getDirContents('.');

foreach ($scaneaza as $xxx) {
	if (is_dir($xxx)) {
		$sub = scandir($xxx);
		echo "<pre>";
			var_dump($sub);
		echo "</pre>";
	}
	echo $xxx . '<br>';
}




