<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddThumbsdownCountFieldToItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//add thumbsdown field to items table
		Schema::table('items',function($table){
			$table->integer('thumbsdown_count');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//drop the column
		Schema::table('items',function($table){
			$table->dropColumn('thumbsdown_count');
		});
	}

}
