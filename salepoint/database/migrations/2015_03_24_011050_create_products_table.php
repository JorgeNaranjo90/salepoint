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
            $table->double('purchasePrice')->nullable()->default(0.0);
            $table->double('salePrice')->nullable()->default(0.0);
            $table->double('qtyAvailable')->nullable()->default(0.0);
            $table->double('incomingQty')->nullable()->default(0.0);
            $table->double('virtualAvailable')->nullable()->default(0.0);
            $table->string('ean13');
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
