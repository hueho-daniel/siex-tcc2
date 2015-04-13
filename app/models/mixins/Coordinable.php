<?php

trait Coordinable {
	public function coordinators() {
		return $this->morphMany('Coordinator', 'coordinable');
	}
}