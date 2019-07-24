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

$router->get('/key', function() {
    return str_random(32);
});

$router->get('/data', 'ContohController@getData');

// $router->get('/profile', [
//     'as' => 'profile', 'uses' => 'ContohController@getDataContoh'
// ]);

$router->get('/rekomendasi', 'ContohController@getDataRekomendasi');

$router->get('/filter', 'ContohController@filterData');

$router->get('/get_img/{id}', 'ContohController@getImg');