<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZodiacalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('zodiacal', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',60);
            $table->integer('day_start');
            $table->integer('mounth_start');
            $table->integer('day_end');
            $table->integer('mounth_end');
            $table->softDeletes();
            $table->timestamps();
        });
        \DB::table('zodiacal')->insert([
            ['name' => 'Aries', 'day_start'=>'20','mounth_start'=>'03','day_end'=>'19','mounth_end'=>'04'],
            ['name' => 'Tauro', 'day_start'=>'20','mounth_start'=>'04','day_end'=>'20','mounth_end'=>'05'],
            ['name' => 'Giminis', 'day_start'=>'21','mounth_start'=>'05','day_end'=>'20','mounth_end'=>'06'],
            ['name' => 'Cancer', 'day_start'=>'21','mounth_start'=>'06','day_end'=>'22','mounth_end'=>'07'],
            ['name' => 'Leo', 'day_start'=>'23','mounth_start'=>'07','day_end'=>'22','mounth_end'=>'08'],
            ['name' => 'Virgo', 'day_start'=>'23','mounth_start'=>'08','day_end'=>'22','mounth_end'=>'09'],
            ['name' => 'Libra', 'day_start'=>'23','mounth_start'=>'09','day_end'=>'22','mounth_end'=>'10'],
            ['name' => 'Escorpion', 'day_start'=>'23','mounth_start'=>'10','day_end'=>'21','mounth_end'=>'11'],
            ['name' => 'Sagitario', 'day_start'=>'22','mounth_start'=>'11','day_end'=>'22','mounth_end'=>'12'],
            ['name' => 'Capricornio', 'day_start'=>'22','mounth_start'=>'12','day_end'=>'20','mounth_end'=>'01'],
            ['name' => 'Acuario', 'day_start'=>'20','mounth_start'=>'01','day_end'=>'17','mounth_end'=>'02'],
            ['name' => 'Pisis', 'day_start'=>'18','mounth_start'=>'02','day_end'=>'19','mounth_end'=>'03'],

        ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('zodiacal');
	}

}
