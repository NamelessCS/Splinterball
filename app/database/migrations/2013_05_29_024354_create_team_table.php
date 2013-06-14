<?php

use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tm_team', function($table) {
		    $table->increments('team_id');
		    $table->string('city', 128);
		    $table->string('state', 128);
		    $table->string('country', 128);
		    $table->string('name', 64);
		    $table->timestamps();
		    $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tm_team');
	}

}