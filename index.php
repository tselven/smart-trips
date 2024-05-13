<?php
require_once "autoload.php";
use Modules\Router;
$uri =  $_SERVER["REQUEST_URI"];
$router = new Router();
$router->load('web.json');
$router->load('api.json');
$router->route($uri);