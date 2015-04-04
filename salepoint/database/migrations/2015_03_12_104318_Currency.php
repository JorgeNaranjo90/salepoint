<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Currency extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('currencys', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',50);
            $table->string('symbol',3);
            $table->softDeletes();
            $table->timestamps();
        });

        \DB::table('currencys')->insert([
            [ 'name' => 'MXN',
              'symbol' => '$'],
            [ 'name' => 'USD',
              'symbol' => '$'],
            [ 'name' => 'EUR',
              'symbol' => '€']
        ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('currencys');
	}

}
