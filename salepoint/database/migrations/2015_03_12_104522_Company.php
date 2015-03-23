<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('companys', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',60);
            $table->integer('partner_id')->unsigned();
            $table->integer('currency_id')->unsigned();
            $table->integer('fiscalRegimen_id')->unsigned();
            $table->binary('image')->nullable();
            $table->foreign('partner_id')->references('id')->on('partners');
            $table->foreign('currency_id')->references('id')->on('currencys')->onUpdate('cascade');
            $table->foreign('fiscalRegimen_id')-> references('id')->on('fiscalRegimens')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('companys');
	}

}
