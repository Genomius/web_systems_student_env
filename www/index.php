<?php
include_once "auto_include.php";

$auto = new Auto_include();
$auto->include_all();

$routing = new Routing();
$routing->analysis($_SERVER['REQUEST_URI']);
?>