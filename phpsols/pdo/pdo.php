<?php

require_once('../connection.php');

$conn = dbConnect('read', 'pdo');

// $sql = 'SELECT * FROM images';
// $sql = 'SELECT * FROM images WHERE image_id <= 5 ORDER BY caption DESC';
$sql = 'SELECT * FROM images WHERE caption LIKE "%kyoto%"';
// $sql = 'SELECT filename, caption FROM images';

$result = $conn->query($sql);

$errorInfo = $conn->errorInfo();

if (isset($errorInfo[2])) {
	$error = $errorInfo[2];
}

if (isset($errorInfo[2])) {
	$error = $errorInfo[2];
} else {
	$numRows = $result->rowCount();
}

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MySQLi DB Connect</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
		if (isset($error)) {
			echo "<p>$error</p>";
		} else {
			echo "<p>A total of $numRows records were found.</p>";
		}
	?>
		<table>
			<tr>
				<th>image_id</th>
				<th>filename</th>
				<th>caption</th>
			</tr>
			<?php foreach ($conn->query($sql) as $row) { ?>
			<tr>
				<td><?php echo $row['image_id']; ?></td>
				<td><?php echo $row['filename']; ?></td>
				<td><?php echo $row['caption']; ?></td>
			</tr>
			<?php } ?>
		</table>

	<?php

	?>
</body>
</html>

