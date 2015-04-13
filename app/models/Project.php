<?php

class Project extends \Eloquent {
	use HasOwner, Organizable;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function program()
	{
		return $this->hasOne("Program");
	}

}