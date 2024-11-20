<?php
$routes = [
    ['method' => 'GET', 'path' => '/', 'handler' => 'HomeController@index'],
    ['method' => 'GET', 'path' => '/home/test', 'handler' => 'HomeController@home'],
    ['method' => 'GET', 'path' => '/home/users', 'handler' => 'UserController@getAll'],
    ['method' => ['GET', 'POST'], 'path' => '/home/users/addUser', 'handler' => 'UserController@create'],
    ['method' => ['GET', 'POST'], 'path' => '/home/users/updateUser', 'handler' => 'UserController@update']
];
define('ROUTES', $routes);
