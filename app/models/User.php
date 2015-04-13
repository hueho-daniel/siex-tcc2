<?php

class User extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function projects() {
		return $this->hasMany("Project");
	}

	public function programs() {
		return $this->hasMany("Program");
	}
	
	public function projects() {
		return $this->hasMany("Event");
	}

	public function programs() {
		return $this->hasMany("Course");
	}

	public function coordinators() {
		return $this->hasMany("Coordinator");
	}

}