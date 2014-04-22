<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThrottleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('throttle', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('ip_address');
			$table->integer('attempts');
			$table->integer('suspended');
			$table->integer('banned');
			$table->dateTime('last_attempt_at');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('throttle');
	}

}
