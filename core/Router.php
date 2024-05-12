<?php

namespace Modules;

use Config\Config;
use Modules\Controller;

class Router
{
    public $routes = array();
    //public $dRoutes = array();
    public $dRoutes = [
        "/src/|2"          =>     "assets@Files",
        "/video/|1"        =>     "assets@Video",
        "/audio/|1"        =>     "assets@Audio",
        "/image/|1"        =>     "assets@Img",
    ];
    protected $status;
    function route($uri)
    {
        if(str_contains($uri,'?')){
            $uri = explode('?',$uri)[0];
        }
        if (isset($this->routes[$uri])) {
            $str = $this->routes[$uri];
            $this->status = true;
            $this->execute($str);
        } else {
            //check for dynamic routes.
            foreach ($this->dRoutes as $key => $value) {
                $split = explode('|', $key);
                $pip = $split[0];
                $argsR = intval($split[1]);
                $pref = str_replace($pip, '', $uri);
                $exp = explode('/', $pref);
                $argsO = intval(count($exp));
                if (str_contains($uri, $pip) && $argsR <= $argsO) {
                    $this->status = true;
                    $data = $this->dRoutes[$key];
                    $this->execute($data);
                    break;
                }
            }
        }
        if ($this->status == false) {
            Controller::view('404');
        }
    }
    public function load()
    {
        $path = "routes.json";
        $cont = file_get_contents($path);
        $info = json_decode($cont, true);
        foreach ($info as $key => $value) {
            if (str_contains($key, '|')) {
                $this->dRoutes[$key] = $value;
            } else {
                $this->routes[$key] = $value;
            }
        }
    }
    function generateSlug($string)
    {
        $string = strtolower($string);
        $string = preg_replace('/[^a-z0-9]+/', '-', $string);
        $string = trim($string, '-');
        return $string;
    }

    function execute($str)
    {
        if (str_contains($str, "#")) {
            $arg = str_replace('#', '', $str);
            Controller::view($arg);
        } elseif (str_contains($str, "@")) {
            $parts = explode('@', $str);
            $controller = $parts[0];
            $action = $parts[1];
            if (str_contains($str, '-')) {
                $split = explode('-', $str);
                $controller = explode('-', $controller)[1];
                $path = Config::$root_path . "/controller/" . $split[0] . "/" . $controller . "Controller.php";
                echo $path . "<br>";
            }
            $path = Config::$root_path . "/controller/" . $controller . "Controller.php";
            if (file_exists($path)) {
                include $path;
                if (class_exists($controller)) {
                    $route = new $controller();
                    $route->$action();
                } else {
                    echo "Class $controller not found in $path";
                }
            } else {
                echo "Controller not found";
            }
        }
    }
}
