<?php

ini_set('auto_detect_line_endings', '1');

$filename = 'virgula.csv';

include_once('csv-functions.php');

// extractCsv(filename, daca are titlu, $options).
// $options['lenght'] =  : 0;
// $options['delimiter'] =  ",";
// $options['enclosure'] =  '"';
// $options['escape'] =  '\\';

$options['delimiter'] = ",";
$table = extractCsv($filename, true, $options);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Table Array from CSV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	table.table-style-1 {
		display: block;
		width: 100%;
		border-collapse: collapse;
	}

	table.table-style-1 tr {
		border: 1px solid #DFDFDF;
	}

	table.table-style-1 tr:nth-of-type(odd) {
		background: #F7F4F4;
	}

	/*table.table-style-1 tr td:nth-of-type(1) {
		background: #D3D3D3;
	}*/

	table.table-style-1 tr th {
		color: #FFF;
		background: #333;
		text-align: left;
	}

	table.table-style-1 tr td,
	table.table-style-1 tr th {
		padding: 5px 20px;
	}

	table.table-style-1 tr:hover {
		background: #7A7A7A;
		color: #F9F9F9;
	}
</style>
</head>
<body>
	<table class="table-style-1">
		<tr>
			<th>Id</th>
			<th>Name</th>
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