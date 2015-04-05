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

        DB::unprepared("CREATE VIEW selectProducts AS
            select p.*,u.name 'uom' from products p join uoms u on p.uom_id = u.id
            order by p.name asc;
         ");

        DB::unprepared("CREATE VIEW selectProductsMax AS
            select p.*,u.name 'uom' from products p join uoms u on p.uom_id = u.id
            where p.qtyAvailable >= 50 order by p.name;
         ");

        DB::unprepared("CREATE VIEW selectProductsMin AS
            select p.*,u.name 'uom' from products p join uoms u on p.uom_id = u.id
            where p.qtyAvailable <= 50 order by p.name;
         ");

        DB::unprepared("CREATE PROCEDURE productsReport()
            BEGIN
            select p.*,u.name 'uom' from products p join uoms u on p.uom_id = u.id
            order by p.name asc;
            END;
         ");
	}

    /*
     *
    */

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
        DB::unprepared("DROP VIEW IF EXISTS selectProducts");
        DB::unprepared("DROP VIEW IF EXISTS selectProductsMax");
        DB::unprepared("DROP VIEW IF EXISTS selectProductsMin");
        DB::unprepared('DROP PROCEDURE IF EXISTS productsReport');
	}

}
