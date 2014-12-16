<?php

class Event extends Eloquent{
	/**
	*event belongs to item
	* an inverse relationship one-to-many
	*/
	public function item(){
		# event belongs to item
		return $this->belongsTo('Item');

	}
	/**
	* define the relationship between event and photo
	* an event has many photos 
	*/
	public function photo(){
		# an event has many photos
		return $this->hasMany('Photo');
	}
}