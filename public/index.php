<?php
require __DIR__ . '/../vendor/autoload.php';
// require basePath('Framework/Database.php'); optional if you only have 2 frameworks
// require basePath('Framework/Router.php');

use Framework\Router;
use Framework\Session;

Session::start();

require '../helpers.php';


//instantiating the router
$router = new Router();

//get routes
$routes = require basePath('routes.php');

//get current uri and http method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


//route the request
$router->route($uri);
