<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->double('purchasePrice')->nullable();
            $table->double('salePrice')->nullable();
            $table->double('qtyAvailable')->nullable();
            $table->double('incomingQty')->nullable();
            $table->double('virtualAvailable')->nullable();
            $table->string('ean13')->nullable();
            $table->binary('image')->nullable();
            $table->softDeletes();
            $table->integer('uom_id')->unsigned();
            $table->timestamps();

            $table->foreign('uom_id')->references('id')
                ->on('uoms')->onDelete('cascade')->onUpdate('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
