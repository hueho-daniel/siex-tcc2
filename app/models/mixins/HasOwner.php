<?php

trait HasOwner {
	public function owner() {
		return $this->belongsTo('User');
	}
}