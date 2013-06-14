<?php

class PlayerTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pl_player')->delete();

        /************************************
        | MINNESOTA TWINS
        ************************************/
        Player::create(array(
            'first_name' => 'Kevin',
            'last_name' => 'Correia',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Samuel',
            'last_name' => 'Deduno',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Scott',
            'last_name' => 'Diamond',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Mike',
            'last_name' => 'Pelfrey',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'PJ',
            'last_name' => 'Walters',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Jared',
            'last_name' => 'Burton',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Brian',
            'last_name' => 'Duensing',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Casey',
            'last_name' => 'Fien',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Ryan',
            'last_name' => 'Pressly',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Josh',
            'last_name' => 'Roenicke',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Anthony',
            'last_name' => 'Swarzak',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Caleb',
            'last_name' => 'Thielbar',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Glen',
            'last_name' => 'Perkins',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Ryan',
            'last_name' => 'Doumit',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 2,
            'position_alt' => 9,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Chris',
            'last_name' => 'Herrman',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 2,
            'position_alt' => 3,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Joe',
            'last_name' => 'Mauer',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 2,
            'position_alt' => 3,
            'team_id' => 1,
        	)
        );

        Player::create(array(
            'first_name' => 'Jamey',
            'last_name' => 'Carrol',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 5,
            'position_alt' => 4,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Chris',
            'last_name' => 'colabello',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 9,
            'position_alt' => 3,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Brian',
            'last_name' => 'Dozier',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 4,
            'position_alt' => 6,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Eduardo',
            'last_name' => 'Escobar',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 6,
            'position_alt' => 4,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Pedro',
            'last_name' => 'Florimon',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 6,
            'position_alt' => 5,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Justin',
            'last_name' => 'Morneau',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 3,
            'position_alt' => 3,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Aaron',
            'last_name' => 'Hicks',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 8,
            'position_alt' => 9,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Chris',
            'last_name' => 'Parmelee',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 9,
            'position_alt' => 7,
            'team_id' => 1,
            )
        );

        Player::create(array(
            'first_name' => 'Josh',
            'last_name' => 'Willingham',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 7,
            'position_alt' => 9,
            'team_id' => 1,
            )
        );

        /************************************
        | DETROIT TIGERS
        ************************************/
        Player::create(array(
            'first_name' => 'Doug',
            'last_name' => 'Fister',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Rick',
            'last_name' => 'Porcello',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Anibal',
            'last_name' => 'Sanchez',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Max',
            'last_name' => 'Scherzer',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Justin',
            'last_name' => 'Verlander',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Joaquin',
            'last_name' => 'Benoit',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Phil',
            'last_name' => 'Coke',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Darin',
            'last_name' => 'Downs',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Jose',
            'last_name' => 'Ortega',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Luke',
            'last_name' => 'Putkonen',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Drew',
            'last_name' => 'Smyly',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Jose',
            'last_name' => 'Valverde',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 1,
            'position_alt' => 1,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Alex',
            'last_name' => 'Avila',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 7,
            'position_alt' => 8,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Brayan',
            'last_name' => 'Pena',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 2,
            'position_alt' => 9,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Miguel',
            'last_name' => 'Cabrera',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 2,
            'position_alt' => 3,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Prince',
            'last_name' => 'Fielder',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 2,
            'position_alt' => 3,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Omar',
            'last_name' => 'Infante',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 5,
            'position_alt' => 4,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Jhonny',
            'last_name' => 'Peralta',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 9,
            'position_alt' => 3,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Ramon',
            'last_name' => 'Santiago',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 4,
            'position_alt' => 6,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Matt',
            'last_name' => 'Tuiasosopo',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 6,
            'position_alt' => 4,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Andy',
            'last_name' => 'Dirks',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 6,
            'position_alt' => 5,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Avisail',
            'last_name' => 'Garcia',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 3,
            'position_alt' => 3,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Torii',
            'last_name' => 'Hunter',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 8,
            'position_alt' => 9,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Don',
            'last_name' => 'Kelly',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 9,
            'position_alt' => 7,
            'team_id' => 2,
            )
        );

        Player::create(array(
            'first_name' => 'Victor',
            'last_name' => 'Martinez',
            'age' => 25,
            'height' => 25,
            'weight' => 25,
            'position_main' => 7,
            'position_alt' => 9,
            'team_id' => 2,
            )
        );
    }

}