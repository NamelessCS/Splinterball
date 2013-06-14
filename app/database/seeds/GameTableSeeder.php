<?php

class GameTableSeeder extends Seeder {

    protected $fillable = array('*');

    public function run()
    {
        DB::table('gm_game')->delete();

        $today = date('Y-m-d H:i:s');

        Game::create(array(
            'home_team_id' => 1,
            'away_team_id' => 2,
            'date_scheduled' => $today,
            'season' => 2013
        	)
        );

        Game::create(array(
            'home_team_id' => 2,
            'away_team_id' => 1,
            'date_scheduled' => $today,
            'season' => 2013
            )
        );
    }

}