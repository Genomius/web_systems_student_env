<?php

include_once "autoinclude.php";

$auto = new Avto_include();
$auto->Include_all();

$routing = new Routing();
$routing->Analysis($_SERVER['REQUEST_URI']);
