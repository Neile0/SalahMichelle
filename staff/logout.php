<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$staffPath = $path ."/staff";


$sessionPath = $staffPath . "/session.php";
require($sessionPath);
log_out();

?>