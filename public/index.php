<?php


require_once "../Framework/Router.php";






// Instatiate the router
$router = new Router();

//routes definition
require("../routes.php");


// Get current URI and HTTP method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->route($uri, 'GET');





