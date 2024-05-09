<?php


$router->get('/', 'HomeController@index');

$router->get('/register','AuthController@register');
$router->get('/login','AuthController@login');
$router->get('/logout','AuthController@logout');

