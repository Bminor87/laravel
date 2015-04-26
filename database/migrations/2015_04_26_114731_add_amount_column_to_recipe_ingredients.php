<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAmountColumnToRecipeIngredients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recipe_ingredients', function(Blueprint $table)
		{
			$table->string('amount');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recipe_ingredients', function(Blueprint $table)
		{
			$table->dropColumn('amount');
		});
	}

}
