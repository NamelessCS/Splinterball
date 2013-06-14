<?php

use Illuminate\Database\Migrations\Migration;

class CreateLineupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tm_lineup', function($table) {
		    $table->increments('lineup_id');
		    $table->integer('team_id')->unsigned();
		    $table->enum('lineup_type', array('LHP', 'RHP', 'LHPD', 'RHPD'));
		    $table->integer('order_1');
		    $table->integer('order_2');
		    $table->integer('order_3');
		    $table->integer('order_4');
		    $table->integer('order_5');
		    $table->integer('order_6');
		    $table->integer('order_7');
		    $table->integer('order_8');
		    $table->integer('order_9');
		    $table->integer('position_1');
		    $table->integer('position_2');
		    $table->integer('position_3');
		    $table->integer('position_4');
		    $table->integer('position_5');
		    $table->integer('position_6');
		    $table->integer('position_7');
		    $table->integer('position_8');
		    $table->integer('position_9');
		    $table->integer('bench_1');
		    $table->integer('bench_2');
		    $table->integer('bench_3');
		    $table->integer('bench_4');
		    $table->integer('bench_5');
		    $table->integer('bench_6');
		    $table->integer('bench_7');
		    $table->integer('bench_8');
		    $table->integer('bench_9');
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
		Schema::drop('tm_lineup');
	}

}