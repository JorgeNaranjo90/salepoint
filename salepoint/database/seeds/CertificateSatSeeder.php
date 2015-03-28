<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CertificateSatSeeder extends Seeder {

    public function run(){
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            \DB::table('certificatesats')->insert(array(
                'name' => $faker->name,
                'certificateKeyTitle' => $faker->randomKey(),
                'certificatePemFile' => $faker->fileExtension,
                'certificateWeyPemTitle' => $faker->randomKey(),
                'noSerie' => $faker->buildingNumber,
                'startDate' => $faker->date(),
                'endDate' => $faker->date()
            ));
        }
    }


}