<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{

	public function run(){

		$faker = Faker::create();

		for($i=0; $i<10; $i++){
			$id = \DB::table('users')->insertGetId(array(
				'name'      => $faker->firstName,
				'email'    	=> $faker->unique()->email,
				'password' 	=> \Hash::make('123456'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
	 		));
		}
	}
}