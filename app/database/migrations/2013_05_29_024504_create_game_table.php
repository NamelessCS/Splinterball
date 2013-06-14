<?php

use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gm_game', function($table) {
		    $table->increments('game_id');
		    $table->integer('home_team_id')->unsigned();
		    $table->integer('away_team_id')->unsigned();
		    $table->integer('winning_team_id')->unsigned()->nullable();
		    $table->datetime('date_simulated')->nullable();
		    $table->datetime('date_scheduled');
		    $table->integer('innings_played')->nullable();
		    $table->integer('season');
		    $table->timestamps();
		    $table->softDeletes();

		    //$table->foreign('home_team_id')->references('team_id')->on('tm_team')->onUpdate('cascade');
		    //$table->foreign('away_team_id')->references('team_id')->on('tm_team')->onUpdate('cascade');
		    //$table->foreign('winning_team_id')->references('team_id')->on('tm_team')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gm_game');
	}

}