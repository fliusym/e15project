<?php

class ItemListController extends BaseController{
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
	* get item list
	*@return View
	*/
	public function getList(){
		#get the current user's all items
		$items = Item::getCurUserAllItems();

	//	$items = Item::all();

		return View::make('itemlist')
					->with('items',$items);
	}
	/**
	* delete the item
	* @return View
	*/
	public function postItemDelete(){
		if(Request::ajax()){
			$id = $_POST['id'];
			try{
				$item = Item::findOrFail($id);
			}
			catch(exception $e){
				return Redirect::to('/itemlistupdate')->with('flash_message','Could not delete item - not found');
			}
			Scene::deleteAllScenes($id);
			Item::destroy($id);
		}

	}

	/**
	* show the edit item
	* @return View
	*/
	public function getItemEdit($id){
		try{
			#if can find the item based on its id
			$item = Item::findOrFail($id);
		}
		catch(exception $e){
			return Redirect::to('/itemlist')->with('flash_message','Item not found');
		}
		return View::make('itemedit')->with('item',$item);
	}

	/**
	* process the edit item
	* @return View
	*/
	public function postItemEdit(){
		try{
			$item = Item::findOrFail(Input::get('id'));
			$itemTitle = Input::get('itemtitle');
			$itemdescription = Input::get('itemdescription');
			$item->title = $itemTitle;
			$item->description = $itemdescription;
			$item->save();
			$scenes = $item->scenes;
			foreach ($scenes as $scene) {
				# code...
				$sceneid = $scene->id;
				$scenetitle = Input::get("scenetitle".$sceneid);
				$scenedescription = Input::get("scenedescription".$sceneid);
				$sceneimage = input::get("sceneimage".$sceneid);
				$scene->title = $scenetitle;
				$scene->description = $scenedescription;
				$scene->image = $sceneimage;
				$scene->save();
			}
			return Redirect::action('ItemListController@getList');
		}
		catch(exception $e){
			//return Redirect::to('/itemlist')->with('flash_message','Something wrong when editing');
			return Redirect::to('/');
		}
	}


}