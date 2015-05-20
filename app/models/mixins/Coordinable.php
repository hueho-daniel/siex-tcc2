<?php

trait Coordinable {
	public function coordinators() {
		return $this->morphMany('Coordinator', 'coordinable');
	}

  public function updateCoordinators($data) {
    $formatted = [];
    foreach ($data as $field => $values) {
      foreach ($values as $idx => $value) {
        if(!isset($formatted[$idx])) {
          $formatted[$idx] = [];
        }
        $formatted[$idx][$field] = $value;
      }
    }

    $formatted = array_filter($formatted, function($elem)
    {
      return !empty($elem['name']);
    });

    $newCoordinators = array_map(function($elem)
    {
      return new Coordinator($elem);
    }, $formatted);

    $this->coordinators()->delete();
    $this->coordinators()->saveMany($newCoordinators);
  }
}