<?php
require_once "autoload.php";
use Core\Router;
$uri =  $_SERVER["REQUEST_URI"];
//use Helpers\Helper;
$router = new Router();
$router->load('web.json');
$router->load('api.json');
$router->route($uri);
?>
