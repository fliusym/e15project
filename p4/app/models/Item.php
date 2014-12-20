<?php
class Item extends Eloquent{
	/**
	* identify relation between Item and Event
	* an item has many events
	*/
	public function scenes(){
		#one item has many events
		return $this->hasMany('Scene');
	}

	/**
	* define relation from item to user
	* an item belongs to a user
	*/
	public function user(){
		return $this->belongsTo('User');
	}

	/**
	* get the all items from current user
	* @return Array
	*/
	public static function getCurUserAllItems(){
		#this function should be done by some queries, but I couldn't figure it out
		$ret = Array();

		$user = Auth::user();
		$items = Item::all();

		foreach ($items as $item) {
			# code...
			if($item->user_id == $user->id)
			{
/*				echo '<pre>';
				var_dump($item);
				echo '</pre>';*/
				array_push($ret, $item);
			}
		}
		return $ret;
	}

}