<?php

trait Organizable {
	public function organizers() {
		return $this->belongsToMany('Users');
	}
}