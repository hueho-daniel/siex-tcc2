<?php

class Course extends \Eloquent {
	use CommonScopes, HasOwner, Coordinable;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
  protected $guarded = [];

}