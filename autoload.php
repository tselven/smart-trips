<?php
namespace Config;
session_start();
require_once "./core/controller.php";
require_once "./core/model.php";
require_once "./core/media.php";
require_once "./core/helpers.php";
require_once "./core/Router.php";
require_once "./core/view/view.php";
require_once "./core/view/components/button.php";
require_once "./core/view/components/text.php";
require_once "./models/place.php";
require_once "./models/user.php";
/**
 * @category Configuration
 */
class Config
{
    public static $host = "localhost";
    public static $user = "myadmin";
    public static $pass = "myadmin";
    public static $db = "smart_trips";
    public static $root_url;
    public static $root_path;
    public static function init()
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        self::$root_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        self::$root_path = $_SERVER['DOCUMENT_ROOT'];
    }
}
Config::init();