<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentMethods extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('paymentMethods', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',80);
            $table->softDeletes();
            $table->timestamps();
        });

        \DB::table('paymentMethods')->insert([
           ['name' => 'Efectivo'],
           ['name' => 'Transferencia'],
           ['name' => 'Tarjeta de crédito'],
           ['name' => 'Vales de despensa'],
           ['name' => 'Monedero Eléctronico'],
           ['name' => 'Otros']
        ]);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('paymentMethods');
	}

}
