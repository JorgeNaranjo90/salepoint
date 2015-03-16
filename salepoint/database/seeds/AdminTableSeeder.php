<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder{

	public function run(){

		\DB::table('users')->insert(array(
			'name'     => 'Admin',
			'email'    => 'admin@abarrotestauro.com',
			'password' => \Hash::make('admin'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
 		));

	}
}