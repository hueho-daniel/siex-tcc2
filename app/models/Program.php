<?php

class Program extends \Eloquent {
	use CommonScopes, HasOwner, Organizable;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $guarded = [];

	public function project()
	{
		return $this->belongsTo("Project");
	}

}