<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIngredient extends Model {

	protected $fillable = [
		'user_id',
		'ingredient_id'
	];

}
