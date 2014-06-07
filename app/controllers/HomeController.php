<?php
class HomeController extends BaseController {
    public function index() {
        return View::make('home.index');
    }

    public function login() {
    	return View::make('home.login');
    }

    public function doLogin() {
    	if (!Auth::attempt(array(
		'email' => Input::get('email'),
		'password' => Input::get('password')))) {
            return Redirect::back()
                ->withInput()
                ->with('error', 'Invalid credentials');
        }
        return Redirect::back();
    }

    public function doLogout() {
    	Auth::logout();
    	return Redirect::intended('/');
    }
}
