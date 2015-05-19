<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
		'password' => 'confirmed|min:8'
	];

	// Don't forget to fill this array
	protected $guarded = [];

	protected $visible = ['name', 'cpf'];

	public function projects() {
		return $this->hasMany("Project");
	}

	public function programs() {
		return $this->hasMany("Program");
	}
	
	public function events() {
		return $this->hasMany("Event");
	}

	public function courses() {
		return $this->hasMany("Course");
	}

	public function coordinators() {
		return $this->hasMany("Coordinator");
	}

	// Acessores de conveniência
	public function getContactNameAttribute() {
		return $this->name;
	}

	public function getContactPhoneAttribute() {
		return $this->phone;
	}

	public function getContactFaxAttribute() {
		return $this->fax;
	}

	public function getContactCelAttribute() {
		return $this->cel;
	}

	public function getContactEmailAttribute() {
		return $this->email;
	}

	public function getContactSiteAttribute() {
		return $this->site;
	}
}
