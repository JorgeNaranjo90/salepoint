<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FiscalRegimen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fiscalRegimens', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',60);
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();
        });
         \DB::table('fiscalRegimens')->insert([
                 [ 'name'      => 'Personas morales del régimen general',
                   'description' => 'Es para las sociedades mercantiles, asociaciones civiles de profesionales que:

	- Realicen actividades lucrativas,
	- Sociedades cooperativas de producción,
	- Instituciones de crédito tales como bancos y casas de bolsa,
	- Organismos descentralizados que comercialicen bienes o servicios, entre otras.
	'],


     [ 'name'      => 'Personas morales con fines no lucrativos',
       'description' => 'Es para las personas morales cuya finalidad no es obtener una ganancia económica o lucro, por ejemplo:

	- Instituciones de asistencia o de beneficencia
	- Asociaciones o sociedades civiles con fines políticos o deportivos
	- Asociaciones religiosas
	- Asociaciones patronales; sindicatos obreros; cámaras de comercio e industria
	- Asociaciones o sociedades civiles de enseñanza; de investigación científica o tecnológica
	- Sociedades cooperativas de consumo o sociedades mutualistas.
	- Colegios de profesionales
	- Partidos políticos
	- Asociaciones de padres de familia
	- Asociaciones civiles de colonos o las que administren inmuebles en condominio
	'],


     [ 'name'      => 'Asociaciones Religiosas',
       'description' => 'Son congregaciones que tienen como fin el ejercer culto a una divinidad; para efectos fiscales, se considerarán a
       las iglesias y demás agrupaciones que obtengan su correspondiente registro constitutivo ante la Secretaría de
       Gobernación, en los términos de la Ley de Asociaciones Religiosas y Culto Público, ya que es a través de este
        registro como se obtiene la personalidad jurídica.'],
     [ 'name'      => 'Personas morales del régimen simplificad',
       'description' => 'Deben tributar en el régimen simplificado las siguientes personas morales:

	- Las dedicadas exclusivamente al autotransporte terrestre de carga o de pasajeros.

	- Las que se dediquen exclusivamente a actividades:
	1) Agrícolas
	2) Ganaderas
	3) Silvícolas
	4) Pesqueras

	- Las constituidas como empresas integradoras.'],


     [ 'name'      => 'Persona física con actividad empresarial',
       'description' => 'Es el régimen conforme al cual pueden pagar sus impuestos todas las personas físicas que se dediquen a las siguientes actividades

	- Comerciales.

	- Industriales, que consisten en la extracción, conservación o transformación de materias primas, acabado de productos y la elaboración de satisfactores;

	- Agrícolas, que comprenden las actividades de siembra, cultivo, cosecha y la primera enajenación de los productos obtenidos, que no hayan sido objeto de transformación industrial;

	- Ganaderas, que son las consistentes en la cría y engorda de ganado, aves de corral y animales, así como la primera enajenación de sus productos, que no hayan sido objeto de transformación industrial;

	- De pesca, que incluyen la cría, cultivo, fomento y cuidado de la reproducción de toda clase de especies marinas y de agua dulce, incluida la acuacultura, así como la captura y extracción de las mismas y la primera enajenación de sus productos, que no hayan sido objeto de transformación industrial;

	- Silvícolas, que son las de cultivo de los bosques o montes, así como la cría, conservación, restauración, fomento y aprovechamiento de la vegetación de los mismos y la primera enajenación de sus productos, que no hayan sido objeto de transformación industrial.']
             ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('fiscalRegimens');
	}

}
