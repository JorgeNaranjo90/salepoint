<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 22/03/15
 * Time: 11:30 PM
 */

class CurrencyTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
             \DB::table('currencys')->insert(array(
                'name' => $faker->currencycode,
            ));
        }
    }
}