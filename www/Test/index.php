<?
require_once 'Template/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(__DIR__);
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
));

echo $twig->render('index.html', array('name' => 'Fabien'));
?>