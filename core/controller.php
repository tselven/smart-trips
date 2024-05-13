<?php

namespace Modules;

use Config\Config;
//use Modules\view;
use League\Plates\Engine;

class Controller
{
     /**
     * Render a view file with data.
     * 
     * @param string $viewPath The path of the view file
     * @param array $data The data array to be rendered.
     * @return string view that rendered.
     */
    public static function view($viewPath, $data = [])
    {
        extract($data);
        ob_start();
        $view = Config::$root_path."/views/{$viewPath}View.php";
        $content = file_get_contents($view);
        include $view;
        $content = ob_get_clean();
        echo $content;
    }

    function JSON($data)
    {
        header("Content-Type: application/json");
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
    public static function Image($img)
    {
        return Config::$root_url . "/image/{$img}";
    }

    public static function error(String $name)
    {
        header("Content-Type: text/html; charset=UTF-8");
        $page = include "./views/Errors/{$name}View.php";
        return $page;
    }
    
}
