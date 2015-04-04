<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('states', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name',50);
            $table->integer('code')->nullable();
            $table->string('abbreviation',10)->nullable();
            $table->integer('country_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
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
		Schema::drop('states');
	}

}
