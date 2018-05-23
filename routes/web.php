<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
/*
$router->match(['get', 'post'], 'ProductsController@index', function () {
    //
    if (Request::isMethod('post'))
    {
    // ... this is POST method
    }
    if (Request::isMethod('get'))
    {
    // ... this is GET method

    $router->get('products', 'ProductsController@index');
    }
});
*/

$router->get('products', 'ProductsController@index');
$router->get('products/{id}', 'ProductsController@show');
$router->get('stores', 'StoresController@index');
$router->get('reviews', 'ReviewsController@index');
$router->post('products', 'ProductsController@create');
