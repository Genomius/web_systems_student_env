<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 03.05.2015
 * Time: 17:40
 */
Class Avto_include{
    public function Include_all(){
        $this->Core();
        $this->Application();
    }
    public function LoadForeach($Dir)
    {
        foreach(glob($Dir) as $Name) {
            include_once $Name;
        }
    }
    public function Core()
    {
        $this->LoadForeach("core/*.php");
    }
    public function Application()
    {
        $this->LoadForeach("application/*/*.php");
        $this->LoadForeach("application/*/*/*.php");
    }

}