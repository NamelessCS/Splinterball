<?php

class RotationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tm_rotation')->delete();

        Rotation::create(array(
            'team_id' => 1,
            'starter_1' => 7,
            'starter_2' => 1,
            'starter_3' => 2,
            'starter_4' => 3,
            'starter_5' => 4,
            'starter_6' => 5,
            'starter_7' => 6,
            'long_relief_1' => 1,
            'long_relief_2' => 2,
            'long_relief_3' => 3,
            'middle_innings_1' => 4,
            'middle_innings_2' => 5,
            'middle_innings_3' => 6,
            'setup_1' => 23,
            'setup_2' => 24,
            'setup_3' => 25,
            'closer_1' => 1,
            'closer_2' => 1,
            'closer_3' => 1
            )
        );

        Rotation::create(array(
            'team_id' => 2,
            'starter_1' => 26,
            'starter_2' => 27,
            'starter_3' => 28,
            'starter_4' => 29,
            'starter_5' => 30,
            'starter_6' => 31,
            'starter_7' => 32,
            'long_relief_1' => 1,
            'long_relief_2' => 2,
            'long_relief_3' => 3,
            'middle_innings_1' => 4,
            'middle_innings_2' => 5,
            'middle_innings_3' => 6,
            'setup_1' => 23,
            'setup_2' => 24,
            'setup_3' => 25,
            'closer_1' => 1,
            'closer_2' => 1,
            'closer_3' => 1
            )
        );
    }

}