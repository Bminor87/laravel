<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model {

	protected $fillable = [
		'recipe_id',
		'ingredient_id',
		'amount'
	];

}
