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
        $router->get('initial', 'Year2019\InitialController@index');
        $router->group(['prefix' => 'community'], function ($router) {
            $router->get('/', 'Year2019\CommunityController@index');
            $router->get('/organizer/{id}', 'Year2019\CommunityController@getOrganizer');
            $router->get('/participant/{id}', 'Year2019\CommunityController@getParticipant');
            $router->get('/images/{name}', 'Year2019\CommunityController@imagesView');
        });
        $router->group(['prefix' => 'volunteer'], function ($router) {
            $router->get('/', 'Year2019\VolunteerController@index');
            $router->get('/{id}', 'Year2019\VolunteerController@show');
            $router->get('/images/{name}', 'Year2019\VolunteerController@imagesView');
        });
        $router->group(['prefix' => 'facebook'], function ($router) {
            $router->get('posts', 'FacebookController@getPosts');
        });
        $router->group(['prefix' => 'sponsor'], function ($router) {
            $router->get('', 'Year2019\SponsorController@index');
            $router->get('images/{name}', 'Year2019\SponsorController@imagesView');
        });
        // Speaker
        $router->group(['prefix' => 'speaker'], function ($router) {
            $router->get('', 'Year2019\SpeakerController@index');
            $router->get('tags', 'Year2019\SpeakerController@getTags');
            $router->get('{id}', 'Year2019\SpeakerController@show');
            $router->get('images/{platform}/{name}', 'Year2019\SpeakerController@imagesView');
        });
        $router->group(['prefix' => 'unconf'], function ($router) {
            $router->get('/', 'Year2019\UnconfController@index');
            $router->get('/list', 'Year2019\UnconfController@getUnconfList');
            $router->get('/{id}', 'Year2019\UnconfController@show');
        });
        $router->group(['prefix' => 'news'], function ($router) {
            $router->get('', 'Year2019\NewsController@index');
            $router->get('{id}', 'Year2019\NewsController@show');
        });
        $router->group(['prefix' => 'session'], function ($router) {
            $router->get('/', 'Year2019\SessionController@index');
            $router->get('/list', 'Year2019\SessionController@getSessionList');
            $router->get('/{id}', 'Year2019\SessionController@show');
        });
        $router->group(['prefix' => 'home'], function ($router) {
            $router->get('/', 'Year2019\AppHomeController@index');
            $router->get('/images/{name}', 'Year2019\AppHomeController@show');
        });
        $router->group(['prefix' => 'board'], function ($router) {
            $router->get('/{room}', 'Year2019\BoardController@index');
            $router->get('images/{type}/{name}', 'Year2019\BoardController@imagesView');
        });
    });
});
