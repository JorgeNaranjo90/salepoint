<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderLinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_order_lines', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name',60)->nullable();
            $table->double('qty');
            $table->double('unitPrice');
            $table->double('subTotal');
            $table->integer('purchase_order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('purchase_order_id')->references('id')->on('purchase_orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products');
		});

        DB::unprepared("CREATE TRIGGER pruchase_order_liene_UpdateQtyAvalible AFTER INSERT ON purchase_order_lines
                        FOR EACH ROW
                        BEGIN
                        UPDATE products SET incomingQty = incomingQty + NEW.qty,
                                            virtualAvailable = virtualAvailable + NEW.qty WHERE id = NEW.product_id;
                        END;");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_order_lines');
        DB::unprepared("DROP TRIGGER IF EXISTS pruchase_order_liene_UpdateQtyAvalible");

    }

}
