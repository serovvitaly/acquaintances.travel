<?php

class AuthController extends BaseController {

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
        //echo Hash::make('123456');
             
        return View::make('base.common.auth', array('email' => '', 'message' => ''));
    }
    
    
    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
    
    
    public function postLogin()
    {
        $email    = Input::get('email');
        $password = Input::get('password');
        
        if (Auth::attempt(array('email' => $email, 'password' => $password)))
        {
            return Redirect::to('/');
        }
        
        return View::make('base.common.auth', array('email' => $email, 'message' => 'Неверный логин или пароль'));
        
    }

}