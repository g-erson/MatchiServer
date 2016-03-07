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
    return '<style> body { margin: auto;padding: 10px;width: 30%; font-family: arial;font-size:93px;}</style> <body>Matchi <3<br><img src="http://i.imgur.com/oHPibND.jpg" alt="andreas"> </body>';
});

$app->post('/api/users', 'UserController@createUser');

// TODO need to query facebook api for verification
$app->get('/users/{userid}/token/{userToken}/{appToken}','UserController@renewToken');


$app->group(['prefix'     => '/api',
             'namespace'  => 'App\Http\Controllers',
             'middleware' => 'auth'],
             function($app)
{
    $app->put('/users/{userid}/location','MatchController@updateLocation');

    $app->get('/users/{userid}/matches','MatchController@getMatches');

    $app->get('/users/{userid}/blocked','MatchController@getBlockedUsers');

    $app->post('/users/{userid}/block/{blockuserid}','MatchController@blockUser');

    $app->delete('/users/{userid}/block/{unblockuserid}','MatchController@unblockUser');

//    $app->put('/users/{userid}/picture','UserController@updatePicture');

 //   $app->put('/users/{userid}/description','UserController@updateDescription');

    $app->get('/users/{userid}','UserController@getUser');

    $app->delete('/users/{userid}','UserController@deleteUser');
});


/* 
 * Look up authentication with social media.
 */

