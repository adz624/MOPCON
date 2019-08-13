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
    $router->group(['prefix' => 'community'], function ($router) {
        $router->get('/', 'CommunityController@index');
        $router->get('/organizer/{id}', 'CommunityController@getOrganizer');
        $router->get('/participant/{id}', 'CommunityController@getParticipant');
    });
    $router->group(['prefix' => 'volunteer'], function ($router) {
        $router->get('/', 'VolunteerController@index');
        $router->get('/{id}', 'VolunteerController@show');
    });
});
