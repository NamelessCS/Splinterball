<?php

use Illuminate\Database\Migrations\Migration;

class CreatePlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pl_player', function($table) {
		    $table->increments('player_id');
		    $table->string('first_name', 32);
		    $table->string('last_name', 32);
		    $table->integer('age');
		    $table->integer('height');
		    $table->integer('weight');
		    $table->enum('bats', array('Left', 'Right', 'Switch'));
		    $table->enum('throws', array('Left', 'Right'));
		    $table->boolean('is_metric')->default(false);
		    $table->string('birthplace', 128)->default('Yakutsk');
		    $table->integer('position_main')->default(1);
		    $table->integer('position_alt')->default(2);
		    $table->integer('team_id')->unsigned();
		    $table->timestamps();
		    $table->softDeletes();

		    //$table->foreign('team_id')->references('team_id')->on('tm_team')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pl_player');
	}

}