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

$scaneaza = getDirContents('F:/-= Tutoriale =-/-= TeamTreehouse =-/');

foreach ($scaneaza as $xxx) {
	if (is_dir($xxx)) {
		$sub = scandir($xxx);
		echo "<pre>";
			var_dump($sub);
		echo "</pre>";
	}
	echo $xxx . '<br>';
}




