<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 03.05.2015
 * Time: 20:38
 */
class VainPage extends Templates{
    function __construct(){
        parent::__construct(__DIR__,'page.html');
    }
    public function Pesion()
    {
       return array("title" => "its work");
    }
}