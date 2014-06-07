<?php
class HomeController extends BaseController {
    public function index() {
        return View::make('home.index');
    }

    public function doLogin() {
    	if (!Auth::attempt(array(
		'email' => 'pepe@gmail.com',
		'password' => '12345'))) {
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
