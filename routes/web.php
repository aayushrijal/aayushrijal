<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get(
    '/',
    [
        'as'   => 'home',
        'uses' => 'Web\HomeController@index',
    ]
);

$router->get(
    '/about',
    [
        'as'   => 'about',
        'uses' => 'Web\HomeController@about',
    ]
);

$router->get(
    '/portfolio',
    [
        'as'   => 'portfolio',
        'uses' => 'Web\HomeController@portfolio',
    ]
);

$router->get(
    '/contact',
    [
        'as'   => 'contact',
        'uses' => 'Web\HomeController@contact',
    ]
);