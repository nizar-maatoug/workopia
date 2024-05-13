<?php


$router->get('/', 'HomeController@index');

$router->get('/register','AuthController@register');
$router->get('/login','AuthController@login');
$router->get('/logout','AuthController@logout');

$router->post('/register','AuthController@performRegister');
$router->post('/login', 'AuthController@performLogin');


