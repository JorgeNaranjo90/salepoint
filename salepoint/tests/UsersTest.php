<?php

use App\User;
use Faker\Factory as Faker;

class UsersTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */

    public function setUp()
    {
        parent::setUp();
    }


    public function testInsertUserOnlyName()
	{
        $faker = Faker::create();
        $user = new User(['name' => 'Test']);
        $this->be($user);

        /*$new_user = new User();
        $new_user->name= $faker->firstName;*/


        $this->call('GET', 'settings/users/create', array(
            'name' => $faker->firstName,
            'email' => $faker->unique()->email,
            'password' => \Hash::make('123456'),
        ));

        $this->action('POST', 'Settings\Users\UsersController@store');


    }

}
