<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citys', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name',50);
            $table->integer('code')->nullable();
            $table->string('abbreviation',10)->nullable();
            $table->integer('state_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('state_id')->references('id')
                ->on('states')->onDelete('cascade')->onUpdate('cascade');
		});

        \DB::table('citys')->insert(array(
            'name' => 'León',
            'code' => 477,
            'abbreviation' => 'LN',
            'state_id' => 1
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('citys');
	}

}
