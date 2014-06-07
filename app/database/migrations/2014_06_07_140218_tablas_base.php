<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablasBase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instituciones', function($t) {
			$t->increments('id');
			$t->string('nombre');
			$t->timestamps();
		});
		Schema::create('presupuestos', function($t) {
			$t->increments('id');
			$t->string('programa');
			$t->string('proyecto_actividad');
			$t->integer('institucion_id')->unsigned();
			$t->foreign('institucion_id')
				->references('id')
				->on('instituciones')->onDelete('cascade');
			$t->timestamps();
		});
		Schema::create('gastos', function($t) {
			$t->increments('id');
			$t->string('nombre');
			$t->integer('total');
			$t->integer('presupuesto_id')->unsigned();
			$t->foreign('presupuesto_id')
				->references('id')
				->on('presupuestos')->onDelete('cascade');
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
