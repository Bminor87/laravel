<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model {

	protected $fillable = [
		'type',
		'ban',
		'add_categories',
		'edit_categories',
		'add_recipes',
		'delete_recipes',
		'edit_recipes',
		'delete_users',
		'edit_users'
	];

}
