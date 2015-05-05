<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 03.05.2015
 * Time: 20:31
 */
abstract class Templates{
    private $Dir;
    private $Index;
    public  $Template;
    function __construct($dir,$index){
        $this->Dir = $dir;
        $this->Index = $index;
        Twig_Autoloader::register();
        $this->Load();
    }
    public function Load(){
        $loader = new Twig_Loader_Filesystem($this->Dir.'/Vain');
        $this->Template = new Twig_Environment($loader, array(
            'cache' => $this->Dir.'/Vain/compilation_cache',
        ));
    }
    abstract public function Pesion();
    public function Render(){
        return $this->Template->render($this->Index, $this->Pesion());
    }
}