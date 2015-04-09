<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleOrderLinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_order_lines', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name',60)->nullable();
            $table->double('qty');
            $table->double('unitPrice');
            $table->double('subTotal');
            $table->integer('sale_order_id')->unsigned();
            $table->integer('product_id')->unsigned();
			$table->timestamps();
            $table->softDeletes();

            $table->foreign('sale_order_id')->references('id')->on('sale_orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sale_order_lines');
	}

}
