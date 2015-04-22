<?php

class Coordinator extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
  protected $guarded = [];

	public function coordinable() {
		return $this->morphTo('coordinable');
	}

}