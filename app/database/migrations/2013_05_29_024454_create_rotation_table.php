<?php

use Illuminate\Database\Migrations\Migration;

class CreateRotationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tm_rotation', function($table) {
		    $table->increments('rotation_id');
		    $table->integer('team_id')->unsigned();
		    $table->integer('starter_1');
		    $table->integer('starter_2');
		    $table->integer('starter_3');
		    $table->integer('starter_4');
		    $table->integer('starter_5');
		    $table->integer('starter_6');
		    $table->integer('starter_7');
		    $table->integer('long_relief_1');
		    $table->integer('long_relief_2');
		    $table->integer('long_relief_3');
		    $table->integer('middle_innings_1');
		    $table->integer('middle_innings_2');
		    $table->integer('middle_innings_3');
		    $table->integer('setup_1');
		    $table->integer('setup_2');
		    $table->integer('setup_3');
		    $table->integer('closer_1');
		    $table->integer('closer_2');
		    $table->integer('closer_3');
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
		Schema::drop('tm_rotation');
	}

}