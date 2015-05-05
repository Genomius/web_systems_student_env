<?php
include_once "auto_include.php";

$auto = new Auto_include();
$auto->include_all();

Routing::analysis($_SERVER['REQUEST_URI']);
?>