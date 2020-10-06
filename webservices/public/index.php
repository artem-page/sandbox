<?php

if (is_file($autoloader = dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once $autoloader;
}

use App\DB;

use App\Router;

$router = new Router;

$url = $_GET["url"];

require dirname(__DIR__) . "/api/" . $url . ".php";

?>