<?php

class TeamTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tm_team')->delete();

        Team::create(array(
        	'city' => 'Minneapolis',
        	'state' => 'MN',
        	'country' => 'USA',
        	'name' => 'Twins'
        	)
        );

        Team::create(array(
        	'city' => 'Detroit',
        	'state' => 'MI',
        	'country' => 'USA',
        	'name' => 'Tigers'
        	)
        );
    }
}