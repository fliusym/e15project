<?php

class UserController extends BaseController{

	/**
	* construct function for UserController
	* call base class's __construct function and apply some before filters
	* @return void
	*/
	public function __construct(){
		# make sure parent class's __construct funciton is called
		parent::__construct();

		$this->beforeFilter('guest',array(
			'only' => array('getLogin','getSignup')
			));
	}

	/**
	*Show Singup page
	*@return View
	*/
	public function getSignup(){
		return View::make('signup');
	}

	/**
	* process the new user sign up
	* @return Redirect
	*/
	public function postSignup(){
		#define some rules
		$rules = array(
			'email' =>'required | email | unique:users,email' , 
			'password' => 'required | min: 6 |confirmed',
			'password_confirmation' => 'required ');

		#validator
		$validator = Validator::make(Input::all(),$rules);

		#validate
		if($validator->fails()){
			return Redirect::to('/signup')
			->withInput()
			->withErrors($validator);
		}

		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		try {
			$user->save();
			
		} catch (Exception $e) {
			return Redirect::to('/signup')
			->with('flash_message','Sign up failed; Please try again')
			->withInput();
		}

		#log in
		Auth::login($user);
		return Redirect::to('/');
	}

	/**
	* Display the sign in page
	* @return View
	*/
	public function getLogin(){
		return View::make('signin');
	}

	/**
	* Process the log in
	* @return View
	*/
	public function postLogin(){
		try
		{
			$credentials = Input::only('email','password');
			$remember = Input::get('remember-me');

			if(Auth::attempt($credentials,$remember))
			{
				return Redirect::intended('/');
			}
			else
			{
				return Redirect::to('/signin')
				->with('flash_message','Sign in failed; Please try again.')
				->withInput();
			}
		}catch(Exception $e)
		{
			return Redirect::to('/signin')
				->with('flash_message','Sign in failed; Please try again.')
				->withInput();			
		}

	}

	/**
	* Log out
	* @return Redirect
	*/
	public function getLogout(){
		Auth::logout();
		return Redirect::to('/');
	}
}