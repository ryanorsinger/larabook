<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('board_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('board_id')->unsigned()->index();
			$table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
			// $table->integer('user_id')->unsigned()->index();
			// $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('board_user');
	}

}
