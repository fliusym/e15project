<?php

class Scene extends Eloquent{
	/**
	*event belongs to item
	* an inverse relationship one-to-many
	*/
	public function item(){
		# event belongs to item
		return $this->belongsTo('Item');

	}

	/**
	* delete all scenes with its item id equals itemId
	* 
	*/
	public static function deleteAllScenes($itemId){
		$scenes = Scene::all();
		foreach ($scenes as $scene) {
			# code...
			if($scene->item_id == $itemId){
				Scene::destroy($scene->id);
			}
		}
	}
}