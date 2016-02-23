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


$app->get('/', function () use ($app) 
{
    return "Matchi <3";
});

$app->post('/api/users', 'UserController@createUser');

// TODO need to query facebook api for verification, shouldn't be too hard
$app->get('/users/{userid}/token/{userToken}/{appToken}','UserController@getToken');


$app->group(['prefix'     => '/api',
             'namespace'  => 'App\Http\Controllers',
             'middleware' => 'auth'],
             function($app)
{
    $app->put('/users/{userid}/location','MatchController@updateLocation');

    $app->get('/users/{userid}/matches','MatchController@getMatches');

    $app->put('/users/{userid}/description','UserController@updateDescription');

    $app->put('/users/{userid}/picture','UserController@updatePicture');

    $app->get('/users/{userid}','UserController@getUser');

    $app->delete('/users/{userid}','UserController@deleteUser');
});


/* 
 * Look up authentication with social media.
 */

