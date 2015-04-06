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
            $table->integer('partner_id')->unsigned();
            $table->timestamps();
            $table->foreign('uom_id')->references('id')
                ->on('uoms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('partner_id')->references('id')
                ->on('partners')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::unprepared("CREATE VIEW selectProducts AS
            select p.*,u.name 'uom',pp.name 'supplier_name' from products p join uoms u on p.uom_id = u.id
            join partners pp on p.partner_id = pp.id
            where  p.deleted_at is null order by pp.name,p.name;
         ");

        DB::unprepared("CREATE VIEW selectProductsReport AS
                select p.name,p.ean13,u.name 'uom',p.qtyAvailable,p.incomingQty,
                p.virtualAvailable,p.purchasePrice,pa.name 'supplier_name'
                from products p join uoms u on p.uom_id = u.id join
                partners pa on p.partner_id = pa.id order by pa.name,p.name asc;
         ");

        DB::unprepared("CREATE VIEW selectProductsMax AS
            select p.*,u.name 'uom' from products p join uoms u on p.uom_id = u.id
            join partners pp on p.partner_id = pp.id
            where p.deleted_at is null and p.qtyAvailable >=50 order by pp.name,p.name;
         ");

        DB::unprepared("CREATE VIEW selectProductsMin AS
            select p.*,u.name 'uom',pp.name 'supplier_name' from products p join uoms u on p.uom_id = u.id
            join partners pp on p.partner_id = pp.id
            where  p.deleted_at is null and p.qtyAvailable <= 10 order by pp.name,p.name;
         ");

        DB::unprepared("CREATE PROCEDURE productsReport()
            BEGIN
                select p.name,p.ean13,u.name 'uom',p.qtyAvailable,p.incomingQty,
                p.virtualAvailable,p.purchasePrice,pa.name 'supplier_name'
                from products p join uoms u on p.uom_id = u.id join
                partners pa on p.partner_id = pa.id order by pa.name,p.name asc;
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
