<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddThumbsupCountFieldToItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//add the thumbsup count to the items table
		// Schema::table('items',function($table){
		// 	$table->integer('thumbsup_count');
		// });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//drop this column
		// Schema::table('items',function($table){
		// 	$table->dropColumn('thumbsup_count');
		// });
	}

}
