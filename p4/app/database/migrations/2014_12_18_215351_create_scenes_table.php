<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('scenes',function($table){
			$table->increments('id');
			$table->timestamps();

			#other fields
			$table->string('title');
			$table->text('description');
			$table->string('image');

			$table->integer('item_id')->unsigned();
			#foreign keys
			$table->foreign('item_id')->references('id')->on('items');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('scenes');
	}

}
