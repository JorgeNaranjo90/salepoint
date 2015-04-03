<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParamPacs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('paramPacs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',50);
            $table->string('methodType',40);
            $table->string('urlWebService',140);
            $table->string('nameSpace',50);
            $table->string('userPac',40);
            $table->string('passwordPac',50);
            $table->string('certificateLink',100);
            $table->string('active',10);
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
        Schema::drop('paramPacs');

    }

}
