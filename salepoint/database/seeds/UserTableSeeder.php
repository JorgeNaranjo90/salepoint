<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {

        /*$faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $id = \DB::table('users')->insertGetId(array(
                'name' => $faker->firstName,
                'email' => $faker->unique()->email,
                'password' => \Hash::make('123456'),
            ));
        }*/

        \DB::table('users')->insert([
            [
                'name' => 'Mario Muñoz',
                'email' => 'mario7000@gmail.com',
                //'password' => '12345678',
                'password' => 'MTIzNDU2Nzg=',
                'type' => 'user'
            ],
            [
                'name' => 'Jorge Naranjo',
                'email' => 'jorge7000@gmail.com',
                'password' => 'MTIzNDU2Nzg=',
                'type' => 'sale'
            ],
            [
                'name' => 'Mauricio Hijonosa',
                'email' => 'mauricio7000@gmail.com',
                'password' => 'MTIzNDU2Nzg=',
                'type' => 'purchase'
            ],
            [
                'name' => 'Jorge Macías',
                'email' => 'jorgem7000@gmail.com',
                'password' => 'MTIzNDU2Nzg=',
                'type' => 'report'
            ],
        ]);

	}
}