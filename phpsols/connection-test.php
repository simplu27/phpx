<?php
require_once 'connection.php';
if ($conn = dbConnect('write')) {
    echo 'Connection successful.';
}