<?php

namespace Modules;

use Config\Config;
//use Modules\view;
use League\Plates\Engine;

class Controller
{
    /**
 * Render a view file
 * 
 * @param string $name The name of the view file, without the.php extension
 * @return string The rendered view file
 */
    public static function view(String $name)
    {
        header("Content-Type: text/html; charset=UTF-8");
        $page = include "./views/{$name}View.php";
        return $page;
    }

   
/*     public static function dView($name, $path)
    {
        header("Content-Type: text/html; charset=UTF-8");
        $page = include "./views/{$path}/{$name}View.php";
        return $page;
    } */
    public static function data_views($name, $data)
    {
        header("Content-Type: text/html; charset=UTF-8");
        $page = include "./views/{$name}View.php";
        foreach ($data as $key => $value) {
            $_SESSION[$$key] = $value;
        }
        return $page;
    }
     /**
     * Render a view file with data.
     * 
     * @param string $viewPath The path of the view file
     * @param array $data The data array to be rendered.
     * @return string view that rendered.
     */
    function renderView($viewPath, $data = [])
    {
        extract($data);
        ob_start();
        $view = Config::$root_path."/views/{$viewPath}View.php";
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
    public static function run()
    {
    }
    
}
