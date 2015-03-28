<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {

        $faker = Faker::create();


        for ($i = 0; $i < 30; $i++) {
            $id = \DB::table('users')->insertGetId(array(
                'name' => $faker->firstName,
                'email' => $faker->unique()->email,
                'password' => \Hash::make('123456'),
            ));
        }

	}
}