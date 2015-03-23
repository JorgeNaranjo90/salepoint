<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FiscalRegimen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fiscalRegimens', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',60);
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();
        });
         \DB::table('fiscalRegimens')->insert([
                 [ 'name'      => 'Personas morales del régimen general',
                   'description' => ''],
                 [ 'name'      => 'Personas morales con fines no lucrativos'],
                 [ 'name'      => 'Asociaciones Religiosas'],
                 [ 'name'      => 'Personas morales del régimen simplificad'],
                 [ 'exit'      => 'Persona física con actividad empresarial']
             ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('fiscalRegimens');
	}

}
