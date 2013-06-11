<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => 'auth'), function(){
    Route::controller('profile', 'ProfileController');
});

Route::get('home',  'HomeController@getHome');

Route::controller('secure',  'AuthController');


//Route::get('/', array('before' => 'guest', 'uses' => 'HomeController@getIndex'));
Route::get('/', array('before' => 'auth',  'uses' => 'HomeController@getIndex'));

