<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateSatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('certificatesats', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name',60);
            $table->binary('certificateKeyTitle')->nullable();
            $table->binary('certificatePemFile')->nullable();
            $table->binary('certificateWeyPemTitle')->nullable();
            $table->string('noSerie',30)->nullable();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
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
		Schema::drop('certificatesats');
	}

}
