<?php

class Photo extends Eloquent{
	/**
	* relation between photo and event
	* an event has many photos and a photo belongs to an event
	*/
	public function event(){
		return $this->belongsTo('Event');
	}
}