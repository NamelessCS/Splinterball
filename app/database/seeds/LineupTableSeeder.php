<?php

class LineupTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tm_lineup')->delete();

        Lineup::create(array(
            'team_id' => 1,
            'lineup_type' => 'RHP',
            'order_1' => 14,
            'order_2' => 15,
            'order_3' => 16,
            'order_4' => 17,
            'order_5' => 18,
            'order_6' => 19,
            'order_7' => 20,
            'order_8' => 21,
            'order_9' => 22,
            'position_1' => 1,
            'position_2' => 2,
            'position_3' => 3,
            'position_4' => 4,
            'position_5' => 5,
            'position_6' => 6,
            'position_7' => 7,
            'position_8' => 8,
            'position_9' => 9,
            'bench_1' => 23,
            'bench_2' => 24,
            'bench_3' => 25,
            'bench_4' => 1,
            'bench_5' => 1,
            'bench_6' => 1,
            'bench_7' => 1,
            'bench_8' => 1,
            'bench_9' => 1
            )
        );

        Lineup::create(array(
            'team_id' => 2,
            'lineup_type' => 'RHP',
            'order_1' => 39,
            'order_2' => 40,
            'order_3' => 41,
            'order_4' => 42,
            'order_5' => 43,
            'order_6' => 44,
            'order_7' => 45,
            'order_8' => 46,
            'order_9' => 47,
            'position_1' => 1,
            'position_2' => 2,
            'position_3' => 3,
            'position_4' => 4,
            'position_5' => 5,
            'position_6' => 6,
            'position_7' => 7,
            'position_8' => 8,
            'position_9' => 9,
            'bench_1' => 48,
            'bench_2' => 49,
            'bench_3' => 50,
            'bench_4' => 1,
            'bench_5' => 1,
            'bench_6' => 1,
            'bench_7' => 1,
            'bench_8' => 1,
            'bench_9' => 1
            )
        );
    }

}