<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 03.05.2015
 * Time: 20:38
 */
class VainForms extends Templates{
    function __construct(){
        parent::__construct(__DIR__,'page.html');
        $this->Render();
        $this->Template->display();
    }
    public function Pesion()
    {
        // TODO: Implement Pesion() method.
    }
}
?>