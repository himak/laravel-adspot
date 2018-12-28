<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = [
		'created_at',
		'updated_at'
	];

	/**
	 * The storage format of the model's date columns.
	 *
	 * @var string
	 */
	protected $created_at = 'U';
}
