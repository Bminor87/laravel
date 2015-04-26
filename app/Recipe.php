<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model {

	protected $fillable = [
		'name',
		'category_id',
		'author_id',
		'short_desc',
		'description'
	];

}
