<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function getIndex()
    {
        echo 'Вы НЕ авторизованы <a href="/secure">авторизоваться</a>';
        
        return View::make('hello');
    }
    
	public function getPrivateIndex()
	{
        echo 'Привет ' . Auth::user()->email . ' <a href="/secure/logout">выход</a>';
        
		return View::make('hello');
	}

}