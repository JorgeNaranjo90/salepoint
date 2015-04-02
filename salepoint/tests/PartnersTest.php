<?php

use App\Partner;
use App\Http\Controllers\Partners\PartnersController;
use Illuminate\Http\RedirectResponse;
use Faker\Factory as Faker;

class PartnersTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */

    public function testCreatePartnerOnlyName()
    {
        $faker = Faker::create();

        $partnerst = new Partner(  array(
            'name' => $faker->name,
            'lastName' => $faker->lastName,
            'street' => $faker->streetName,
            'noExt' => $faker->buildingNumber,
            'noInt' => $faker->buildingNumber,
            'colony' => $faker->streetSuffix,
            'zip' => $faker->postcode,
            'locality' => $faker->citySuffix,
            'rfc' => $faker->name,
            'phone' => $faker->phoneNumber,
            'mobile' => $faker->phoneNumber,
            'fax' => $faker->phoneNumber,
            'email' => $faker->email,
            'customer' => 1,
            'supplier' => 0,
            'birthdate' => $faker->dateTime,
            'city_id' => 1,
            'state_id' => 1,
            'country_id' => 1
        ));

        // $this->assertRedirectedToAction('partners.index');
        //$this->assertRedirectedToRoute('partners.index',[$partnerst->all()]);
       // $this->assertRedirectedTo('partners.index');
        // $this->redirect()->route('partners.index');
        // $this->assertRedirectedToAction('PartnersController@index');

    }

}
