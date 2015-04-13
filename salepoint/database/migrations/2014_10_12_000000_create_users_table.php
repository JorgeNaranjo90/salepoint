<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->binary('image')->nullable();
            /*
             * admin = all privileges.
             * user = see all, but not see settings.
             * sale = see products,partners,sales and pos.
             * purchase = see products, partners and purchases.
             * report = see the reports.
             * */
            $table->enum('type',['admin','user','sale','purchase','report']);
            $table->softDeletes();
			$table->rememberToken();
			$table->timestamps();
		});

        \DB::table('users')->insert(array(
            'name'     => 'Administrator',
            'email'    => 'admin@admin.com',
            'password' => \Hash::make('admin'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
