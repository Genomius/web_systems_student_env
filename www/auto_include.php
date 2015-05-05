<?php
class Auto_include{
    public function include_all(){
        $this->core();
        $this->application();
    }
    public function loadForeach($dir)
    {
        foreach(glob($dir) as $name) {
            include_once $name;
        }
    }
    public function core()
    {
        $this->loadForeach("Core/*.php");
    }
    public function application()
    {
        $this->loadForeach("application/*/*.php");
        $this->loadForeach("application/*/*/*.php");
    }
}
?>