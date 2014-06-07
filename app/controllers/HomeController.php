<?php
class HomeController extends BaseController {
    public function index() {
        return View::make('home.index');
    }

    public function login() {
    	if (Auth::check()) {
    		return Redirect::to("/");
    	} else {
    		return View::make('home.login');	
    	}
    }

    public function register() {
    	return View::make('home.register');
    }

    public function doLogin() {
    	if (!Auth::attempt(array(
		'email' => Input::get('email'),
		'password' => Input::get('password')))) {
            return Redirect::back()
                ->withInput()
                ->with('error', 'Credenciales invalidas.');
        }
        return Redirect::back();
    }

    public function doRegister() {
    	if (Input::get('password') != Input::get('passwordAgain')) {
    		return Redirect::back()
    			->withInput()
    			->with('error', 'Los passwords no coinciden');
    	} else {
			$user = new User();
			$user->name = Input::get('name');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
        	return Redirect::to("/")
            	->with('message', 'Usuario creado');
    	}
    }

    public function doLogout() {
    	Auth::logout();
    	return Redirect::intended('/');
    }
}
