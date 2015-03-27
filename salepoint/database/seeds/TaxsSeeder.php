<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TaxsSeeder extends Seeder{

    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            \DB::table('taxs')->insert(array(
                'name' => $faker->company,
                'code' => $faker->swiftBicNumber,
                'value' => $faker->buildingNumber,
            ));
        }

    }
}