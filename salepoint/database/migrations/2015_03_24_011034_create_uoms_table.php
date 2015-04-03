<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uoms', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name',60);
            $table->string('description',120)->nullable();
            $table->softDeletes();
            $table->timestamps();
		});

        \DB::table('uoms')->insert(array(
            'name'          => 'kg',
            'description'   => 'Kilogramos'
        ));
        \DB::table('uoms')->insert(array(
            'name'          => 'g',
            'description'   => 'Gramos'
        ));
        \DB::table('uoms')->insert(array(
            'name'          => 'pz',
            'description'   => 'Piezas'
        ));
        \DB::table('uoms')->insert(array(
            'name'          => 'lt',
            'description'   => 'Litros'
        ));
        \DB::table('uoms')->insert(array(
            'name'          => 'doc',
            'description'   => 'Docenas'
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uoms');
	}

}