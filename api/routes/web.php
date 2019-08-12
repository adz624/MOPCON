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

$router->group(['prefix' => 'api'], function ($router) {
    $router->group(['prefix' => '2019'], function ($router) {
        $router->get('initial', 'InitialController@index');
    });
    $router->group(['prefix' => 'facebook'], function ($router) {
        $router->get('posts', 'FacebookController@getPosts');
    });
});
