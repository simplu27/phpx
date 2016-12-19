<?php

ini_set('auto_detect_line_endings', '1');

$filename = 'virgula.csv';

include_once('csv-functions.php');

$table = extractCsv($filename, true, ",");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Table Array from CSV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="style.css">
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Email</th>
			<th>Date</th>
		</tr>
		<?php foreach ($table as $row) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['date']; ?></td>
		</tr>
		<?php } // end foreach ?>
	</table>
</body>
</html>