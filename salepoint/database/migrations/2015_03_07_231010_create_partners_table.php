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
            $table->string('street',40);
            $table->integer('noExt')->nullable();
            $table->integer('noInt')->nullable();
            $table->string('colony',60);
            $table->string('zip',6)->nullable();
            $table->string('locality',60);
            $table->string('rfc',20)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('mobile',15)->nullable();
            $table->string('fax',15)->nullable();
            $table->string('email',20)->nullable();
            $table->boolean('customer')->nullable();
            $table->boolean('supplier')->nullable();
            $table->binary('image')->nullable();
            $table->date('birthdate')->nullable();
            $table->softDeletes();
            $table->integer('city_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->timestamps();
            $table->foreign('city_id')->references('id')
                ->on('citys')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('state_id')->references('id')
                ->on('states')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('country_id')->references('id')
                ->on('countrys')->onDelete('cascade')->onUpdate('cascade');
		});
        \DB::table('partners')->insert([
            ['id'=>'1','name' => 'Abarrotes Tauro', 'country_id'=>'1','state_id'=>'1','city_id'=>'1','birthdate'=>'1994-03-23',
            'street' => 'La campeche', 'noExt'=>'225', 'colony' => 'Bellavista',
            'zip' => '37500', 'rfc' => 'ABT902839MJ2', 'phone' => '23456789'],

        ]);
        \DB::table('partners')->insert([
            ['id'=>'2','name' => 'Venta publico general','country_id'=>'1','state_id'=>'1','city_id'=>'1','rfc'=>'XAXX010101000','birthdate'=>'1993-09-13',
            'supplier'=>1,'customer'=>1]
        ]);

        DB::unprepared("CREATE VIEW selectPartners AS
            select p.*,co.name 'country_name',ci.name 'city_name',st.name 'state_name' from partners p
            join countrys co on p.country_id = co.id join states st on co.id = st.country_id join citys
            ci on st.id = ci.state_id order by p.name ASC;
         ");

        DB::unprepared("CREATE VIEW selectCustomers AS
            select p.*,co.name 'country_name',ci.name 'city_name',st.name 'state_name' from partners p
            join countrys co on p.country_id = co.id join states st on co.id = st.country_id join citys
            ci on st.id = ci.state_id where p.customer = 1 order by p.name ASC;
         ");
        DB::unprepared("CREATE VIEW selectSuppliers AS
            select p.*,co.name 'country_name',ci.name 'city_name',st.name 'state_name' from partners p
            join countrys co on p.country_id = co.id join states st on co.id = st.country_id join citys
            ci on st.id = ci.state_id where p.supplier = 1 order by p.name ASC;
         ");
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('partners');
        DB::unprepared('DROP VIEW IF EXISTS selectPartners');
        DB::unprepared('DROP VIEW IF EXISTS selectCustomers');
        DB::unprepared('DROP VIEW IF EXISTS selectSuppliers');
	}

}
