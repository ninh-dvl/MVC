<?php

use MVC\Config\Core;
use MVC\Dispatcher;
use MVC\Request;
use MVC\Router;
define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
require_once __DIR__ . '/../vendor/autoload.php';
// require(ROOT . 'Config/core.php');

// require(ROOT . 'Router.php');
// require(ROOT . 'Request.php');
// require(ROOT . 'Dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>