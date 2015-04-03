<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;



class CurrencyTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
             \DB::table('currencys')->insert(array(
                'name' => $faker->currencycode,
            ));
        }
    }
}