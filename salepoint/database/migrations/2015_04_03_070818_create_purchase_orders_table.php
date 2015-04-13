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

        DB::unprepared("CREATE TRIGGER tr_cancel_Purchase AFTER UPDATE ON purchase_orders
                        FOR EACH ROW
                        BEGIN

                            DECLARE idProduct int;
                            DECLARE qty int;

                            DECLARE c1 CURSOR FOR
                                SELECT sol.product_id, sol.qty
                                FROM purchase_orders so
                                JOIN purchase_order_lines sol ON sol.purchase_order_id = so.id
                                WHERE so.id = NEW.id;

                            DECLARE CONTINUE HANDLER FOR NOT FOUND SET @hecho = TRUE;
                            OPEN c1;
                                loop1: LOOP
                                FETCH c1 INTO idProduct,qty;

                                IF @hecho THEN
                                    LEAVE loop1;
                                END IF;

                                IF New.status = 'cancel' THEN
                                    UPDATE  products SET incomingQty = incomingQty - qty,
                                    virtualAvailable = virtualAvailable - qty
                                    WHERE id = idProduct;
                                ELSE
                                    UPDATE  products SET qtyAvailable = qtyAvailable + qty,
                                    virtualAvailable = incomingQty + qty
                                    WHERE id = idProduct;
                                END IF;

                                END LOOP loop1;
                            CLOSE c1;

                        END;");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_orders');
        DB::unprepared("DROP TRIGGER IF EXISTS tr_cancel_Purchase");
	}

}
