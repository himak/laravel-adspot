<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}


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

	protected $fillable = [ 'title', 'price', 'description'];


	public function getCreatedAtAttribute($date)
	{
		return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y');
	}

	public function getDescriptionAttribute($value)
	{
		return str_limit( $value, 80 );
	}
}
