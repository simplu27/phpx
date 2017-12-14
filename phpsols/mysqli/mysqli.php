<?php

require_once('../connection.php');

$conn = dbConnect('read');

$sql = 'SELECT * FROM images';

$result = $conn->query($sql);

if (!$result) {
	$error = $conn->error;
} else {
	$numRows = $result->num_rows;
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
		?>

			<table>
				<tr style="text-align: left;">
					<th style="padding: 0 30px 0 0;">image_id</th>
					<th style="padding: 0 30px 0 0;">filename</th>
					<th style="padding: 0 30px 0 0;">caption</th>
				</tr>
				<?php while ($row = $result->fetch_assoc()) { ?>
				<tr>
					<td><?= $row['image_id']; ?></td>
					<td><?= $row['filename']; ?></td>
					<td><?= $row['caption']; ?></td>
				</tr>
				<?php } ?>
			</table>

		<?php

		}
	?>
</body>
</html>

