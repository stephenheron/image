<?php

use Illuminate\Database\Migrations\Migration;

class CreateSelectedTopicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('selected_topics', function($table) {
      $table->increments('id');
      $table->integer('topic_id');
      $table->boolean('active')->default(false);
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
		Schema::drop('selected_topics');
	}

}
