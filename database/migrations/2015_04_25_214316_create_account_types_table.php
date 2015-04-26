<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_types', function(Blueprint $table)
		{
			$table->integer('id')->increments();
			$table->string('type');
			$table->tinyInteger('ban');
			$table->tinyInteger('add_categories');
			$table->tinyInteger('edit_categories');
			$table->tinyInteger('add_recipes');
			$table->tinyInteger('delete_recipes');
			$table->tinyInteger('edit_recipes');
			$table->tinyInteger('delete_users');
			$table->tinyInteger('edit_users');
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
		Schema::drop('account_types');
	}

}
