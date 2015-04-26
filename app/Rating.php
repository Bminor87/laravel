<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

	protected $fillable = [
		'recipe_id',
		'rating',
		'rating_count'
	];

}
