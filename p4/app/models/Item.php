<?php
class Item extends Eloquent{
	/**
	* identify relation between Item and Event
	* an item has many events
	*/
	public function event(){
		#one item has many events
		return $this->hasMany('Event');
	}

	/**
	* define relation from item to user
	* an item belongs to a user
	*/
	public function user(){
		return $this->belongsTo('User');
	}

}