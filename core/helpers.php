<?php
namespace Core;
use Config\Config;

class Helper{
    function view($name){
        header("Content-Type: text/html; charset=UTF-8");
        $page = include "./views/{$name}View.php";
        return $page;
    }
    public static function route($path){
        echo Config::$root_url.$path;
    }
    public static function url($path){
        return Config::$root_url.$path;
    }

    
}

function url($path){
    return Config::$root_url.$path;
}