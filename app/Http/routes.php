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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('shirt','ShirtController@index');
  
    $app->get('shirt/{id}','ShirtController@getShirt');
      
    $app->post('shirt','ShirtController@createShirt');
      
    $app->put('shirt/{id}','ShirtController@updateShirt');
      
    $app->delete('shirt/{id}','ShirtController@deleteShirt');
});
