<?php
require '../helpers.php';
require basePath('Database.php');
require basePath('Router.php');

// Instantiating the router
$router = new Router();
// Getting routes
$routes = require basePath('routes.php');

// Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD']; 

// Route the request
$router->route($uri, $method);

?>