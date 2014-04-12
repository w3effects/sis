<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PrincipalsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

//		foreach(range(1, 10) as $index)
//		{
//			Principal::create([
//                'name'
//			]);
//		}

        Principal::create([
            'name' => 'diwan',
            'email' => 'gcc@sis.com',
            'password' => Hash::make('123456')
			]);
	}

}