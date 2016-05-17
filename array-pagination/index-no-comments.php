<?php
include_once('data.php');
$total = count($data); // return 100
$limit = 8; // cat se arata
$page = ''; // pagina
$pages = ceil($total / $limit);

	if (isset($_GET['page']) && $_GET['page'] <= $pages && $_GET['page'] >=1 && is_numeric($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}

$current_start = ($page * $limit) - $limit ;
$online = array_slice($data, $current_start, $limit, TRUE);

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Array pagination</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	*, *:before, *:after {box-sizing: border-box; margin: 0; padding: 0; }
	.clearfix, .clearfix:before, .clearfix:after {clear: both; overflow: hidden; }
	.center {max-width: 800px; margin: 20px auto; padding: 10px 20px; }
	.box {width: 25%; float: left; /*margin: 10px 2%;*/ padding: 10px; }
	@media screen and (max-width: 480px) {.box {width: 50%;} } /* 480px media end */
	.paginare {margin-top: 30px; margin-bottom: 20px;}
	.paginare a {background: #EFEFEF; border: 1px solid #DFDFDF; margin: 4px 2px;
		padding: 3px 7px; text-decoration: none; display: inline-block; border-radius: 4px; }
	a.current-page, .paginare a:hover {background: #5F5F5F; color: #F9F9F9;}
</style>
</head>
<body>
<div class="center">

	<h2>Array pagination</h2>
	<br>
	<?php
		// Pagina: 12 din 13
		echo "Pagina: " . $page . " din " . $pages . "<br>"; 
		// Total items: 100. Se afiseaza [maxim] 8 items per pagina
		echo "Total items: " . $total . ". Se afiseaza [maxim] " . $limit . " items per pagina <br>";
		echo "<br>";

		foreach ($online as $key => $value) {
			echo '<div class="box">';
			echo "Key: " . $key . " ID: " . $data[$key]['id'] . "<br>";
			echo "Nume: " . $data[$key]['name'] . "<br>";
			echo "Pret: " . $data[$key]['price'] . " $<br>";
			echo "</div>";
		}

	?>	
		<div class="clearfix"></div>
		<hr>

	<div class="paginare">
		<?php 
			if ($page > 1 && $page <= $pages) {
				$prev_page = $page - 1;
			} else {
				$prev_page = $pages;
			}

			if ($page == $pages) {
				$next_page = 1;
			} else {
				$next_page = $page + 1;
			}
		?>

		<a href="index.php?page=<?php echo $prev_page; ?>" class="prev">Prev</a>

		<?php 
			for ($i=1; $i <= $pages ; $i++) { 
				if ($i == $page) {
					echo '<a class="current-page" href="index.php?page='. $i .'">'. $i .'</a>' . "&nbsp";
				} else {
					echo '<a href="index.php?page='. $i .'">'. $i .'</a>' . "&nbsp";
				}
			}
		?>
		<a href="index.php?page=<?php echo $next_page; ?>" class="next">Next</a>
	</div><!-- paginare -->
</div><!-- center -->
</body>
</html>