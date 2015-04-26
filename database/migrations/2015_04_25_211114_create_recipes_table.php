<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->integer('category_id');
			//$table->foreign('category_id')->references('id')->on('recipe_categories');
			$table->integer('author_id');
			//$table->foreign('author_id')->references('id')->on('users');
			$table->text('short_desc');
			$table->text('description');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipes');
	}

}
