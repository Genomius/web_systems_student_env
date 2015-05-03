<?php

include_once "autoinclude.php";

$auto = new Avto_include();
$auto->Include_all();

$routing = new Routing();
//var_dump($_SERVER);
$routing->Analysis($_SERVER['REQUEST_URI']);
