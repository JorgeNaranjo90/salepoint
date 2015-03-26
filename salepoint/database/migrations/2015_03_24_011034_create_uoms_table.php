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
            'name'          => 'KGS',
            'description'   => 'KILOGRAMOS'
        ));
        \DB::table('uoms')->insert(array(
            'name'          => 'GRS',
            'description'   => 'GRAMOS'
        ));
        \DB::table('uoms')->insert(array(
            'name'          => 'PZA',
            'description'   => 'PIEZAS'
        ));
        \DB::table('uoms')->insert(array(
            'name'          => 'LT',
            'description'   => 'LITROS'
        ));
        \DB::table('uoms')->insert(array(
            'name'          => 'MLL',
            'description'   => 'MILLAR'
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