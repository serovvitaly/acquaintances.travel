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

//Route::controller('/', 'ProfileController');

Route::controller('message',  'MessageController');

Route::controller('secure',  'AuthController');

Route::get('home',  'HomeController@getHome');

Route::get('/{id}',  'ProfileController@getPerson')->where('id', '[0-9]+');

Route::group(array('before' => 'auth'), function(){
    Route::controller('message',  'MessageController');
    Route::controller('/', 'ProfileController');
    
});



/*


Route::controller('secure',  'AuthController');


//Route::get('/', array('before' => 'guest', 'uses' => 'HomeController@getIndex'));
Route::get('/', array('before' => 'auth',  'uses' => 'ProfileController@getIndex'));

Route::get('/{id}',  'ProfileController@getPerson')->where('id', '[0-9]+');

//Route::get('searh',  'ProfileController@getSearh');

Route::group(array('before' => 'auth'), function(){
    Route::controller('/', 'ProfileController');
});

*/