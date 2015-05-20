<?php

class Event extends \Eloquent {
	use CommonScopes, HasOwner, Coordinable;

  // Resolve casos de strings vazias para campos de números
  public static function boot()
  {
      parent::boot();

      static::saving(function($model)
      {
          if (count($model->forcedNullFields) > 0) {
              foreach ($model->toArray() as $fieldName => $fieldValue) {
                  if (empty($fieldValue) && in_array($fieldName, $model->forcedNullFields)) {
                      $model->attributes[$fieldName] = null;
                  }
              }
          }

          return true;
      });
  }

  protected $forcedNullFields = ['seats', 'minimum_seats', 'workload',
    'first_target_audience_seats', 'second_target_audience_seats'];

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
  protected $guarded = [];

}