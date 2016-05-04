<?php 

$title = 'Some fancy title Goes here';

$slug = preg_replace('/[^a-z0-9-]+/', '-', strtolower($title));

echo $slug;

 ?>