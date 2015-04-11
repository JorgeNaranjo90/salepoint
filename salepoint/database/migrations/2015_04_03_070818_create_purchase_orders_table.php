<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_orders', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name',60);
            $table->dateTime('purchase_order_time');
            $table->double('subTotal')->default(0.0);
            $table->double('total')->default(0.0);
            $table->enum('status', ['validate','done','cancel'])->default('validate');
            $table->integer('partner_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('partner_id')->references('id')->on('partners');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_orders');
	}

}
