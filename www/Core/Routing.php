<?php
class Routing {
    private static $token = array();
    private static $_instance = null;
    private $process = array();
    function __construct(){}
    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new Router();
        }
        return self::$_instance;
    }
    public static function add($rule){
        array_push(self::$token, $rule);
    }
    public static function debug(){
        var_dump(self::$token);
    }
    public static function requireParameter($token, $parameters)
    {
        if (isset($parameters)) {
            $temp = str_replace('/', '\/', $token);
            preg_match_all("/(?<=:)[a-zA-Z0-9]++/", $temp, $arrayParameters);
            foreach ($arrayParameters[0] as $value) {
                if (array_key_exists($value, $parameters)) {
                    $token = str_replace(":$value", "($parameters[$value])", $token);
                }
            }
        }
        return $token;
    }
    public static function analysis($url)
    {
        if(!isset(self::$token)){
            throw new Exception("");
        }

        foreach (self::$token as $ruleName => $value) {
            $pattern = "|".self::requireParameter($value['pattern'], $value['ArticleID'])."|";
            if(preg_match_all($pattern, $url, $out)) {

                self::callback($value['matches'], $out);
                return;
            }
        }
        self::NotFound();
    }
    public static function callback($callback, $arguments){
        $temp = new $callback['Module']();
        call_user_func_array(array($temp, $callback['Sector']), $arguments);
    }
    public static function notFound(){
         echo("<h1>404</h1>");
    }
}
?>