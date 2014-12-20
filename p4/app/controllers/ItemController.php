<?php

class ItemController extends BaseController{
	/**
	* construct function for UserController
	* call base class's __construct function and apply some before filters
	* @return void
	*/
	public function __construct(){
		# make sure parent class's __construct funciton is called
		parent::__construct();
	}

	/**
	*process share item request
	*@return View
	*/
	public function postShareItem(){
		if(Request::ajax()){
			#item from ajax
			$_item = $_POST['item'];
			#create a new Item model
			$item = new Item;
			$item->title = $_item['title'];
			$item->description = $_item['description'];
			#associate to User
			$currentUser = Auth::user();
			$item->user()->associate($currentUser);
			$item->save();


			#events from ajax
			$_events = array();
			if(isset($_item['events']))
				$_events = $_item['events'];

			foreach($_events as $_event) {
				# create a new Event model
				$scene = new Scene;
			 	$scene->title = $_event['title'];
			 	$scene->description = $_event['description'];
			 	$scene->image = $_event['photo'];
			 	$scene->item()->associate($item);
			 	$scene->save();
			}
		//	return Redirect::to('/itemlist');
		}
	}
}