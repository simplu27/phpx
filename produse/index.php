<?php 

include('data.php');

echo "<h2>Toate produsele!</h2>";

echo "<ul>";
foreach ($produse as $id => $produs) { ?>
	<li><a href="/produs/<?php echo $id; ?>">Produsul: <?php echo $id; ?></a></li>
<?php }
echo "</ul>";