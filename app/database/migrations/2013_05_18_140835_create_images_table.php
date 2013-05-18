<?php

use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('images', function($table) {
        $table->increments('id');
        $table->integer('selected_topic_id');
        $table->integer('user_id');
        $table->string('url', 255);
        $table->integer('likes')->default(0);
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
		Schema:drop('images');
	}

}
