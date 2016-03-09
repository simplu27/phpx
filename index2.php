<?php 
	// echo "Silence is golden!";

$files = array_diff(scandir('.'), array('.', '..', '.git'));

// echo "<pre>";
// 	print_r($files);
// echo "</pre>";

echo '<a href="http://test-php.dev/">Home: test-php.dev</a><br><br>';

echo "<ul>";
foreach ($files as $file) {
	echo '<li><a href="' . $file . '">' . $file . '</a>';
		if (is_dir($file) AND is_array($file)) {
			echo "<ul>";
			foreach ($file as $subfile) {
				echo '<li><a href="' . $subfile . '">' . $subfile . '</a>';
			}
			echo "</ul>";
		}
	echo "</li>";
}

echo "</ul>";