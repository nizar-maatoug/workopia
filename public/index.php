<?php
session_start();

require_once "../Framework/Router.php";






// Instatiate the router
$router = new Router();

//routes definition
require("../routes.php");


// Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);


$router->route($uri, $requestMethod);





