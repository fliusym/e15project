<?php

class RandomUserController extends BaseController
{
	public function showRandomUser()
	{
		return View::make('randomuser');
	}
	public function generateRandomUser()
	{
		$users = [];
		$numberUsers = Input::get('how_many_users');
		for($index = 0; $index < $numberUsers; $index++)
		{
			$randomUser = self::generateRandom();
			$users[$index] = $randomUser;
		}
		Input::flash();
		return View::make('randomuser')
		->with('randomusers',$users);
	}

	/**
	* Generate random user based on input from user
	* and APIs from fzaninotto package
	*/
	private function generateRandom()
	{
		$ret = [];
		$faker = Faker\Factory::create();

		$ret['name'] = $faker->name;

		if(Input::has('email'))
		{
			$ret['email'] = $faker->email;
		}
		else
		{
			$ret['email'] = null;
		}

		if(Input::has('profile'))
		{
			$ret['profile'] = $faker->text;
		}
		else
			$ret['profile'] = null;

		if(Input::has('birthdate'))
		{
			$ret['birthdate'] = $faker->dateTimeThisCentury->format('Y-m-d');
		}
		else
			$ret['birthdate'] = null;


		return $ret;

	}
}