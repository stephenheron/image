<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

    Schema::create('users', function($table) {
      $table->increments('id');
      $table->string('username', 64);
      $table->string('password', 64);
      $table->string('forename', 64);
      $table->string('surname', 64);
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
     Schema::drop('users'); 
	}

}
