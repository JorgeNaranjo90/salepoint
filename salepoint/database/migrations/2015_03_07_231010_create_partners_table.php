<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partners', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name',60);
            $table->string('lastName',60)->nullable();
            $table->string('street',40)->nullable();
            $table->integer('noExt')->nullable();
            $table->integer('noInt')->nullable();
            $table->string('colony',60)->nullable();
            $table->string('zip',6)->nullable();
            $table->string('locality',60)->nullable();
            $table->string('rfc',20)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('mobile',15)->nullable();
            $table->string('fax',15)->nullable();
            $table->string('email',20)->nullable();
            $table->boolean('customer')->nullable();
            $table->boolean('supplier')->nullable();
            $table->binary('image')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('city_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();
            //$table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('city_id')->references('id')
                ->on('citys')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('state_id')->references('id')
                ->on('states')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('country_id')->references('id')
                ->on('countrys')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('partners');
	}

}
