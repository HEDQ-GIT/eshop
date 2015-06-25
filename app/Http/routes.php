<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::filter('cache', function($route, $request, $response, $age=60){
    $response->setTtl($age);
});
//get('todo', array('after' => 'cache:180', 'uses' => 'VueController@index'));

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
