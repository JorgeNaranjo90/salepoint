<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taxs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name',40);
            $table->string('code',25)->nullable();
            $table->double('value')->nullable()->default(0.0);
            $table->softDeletes();
			$table->timestamps();
		});

        \DB::table('taxs')->insert([
            [ 'name' => 'Iva 16%',
                'value' => 0.16]
        ]);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('taxs');
	}

}
