<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::statement('SET foreign_key_checks = 0');
		$this->call('GameTableSeeder');
		$this->call('PlayerTableSeeder');
		$this->call('LineupTableSeeder');
		$this->call('RotationTableSeeder');
		$this->call('TeamTableSeeder');
		DB::statement('SET foreign_key_checks = 1');
	}

}