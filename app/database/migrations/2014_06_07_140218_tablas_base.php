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
		Schema::create('proyectos', function($t) {
			$t->increments('id');
			$t->string('nombre');
			$t->string('tipo')->default('EJ'); // EJ, PL, PR
			$t->float('lat')->default(0);
			$t->float('long')->default(0);
			$t->string('descripcion')->nullable();
			$t->integer('contador')->default(0);
			$t->integer('institucion_id')->unsigned()->nullable();
			$t->foreign('institucion_id')
				->references('id')
				->on('instituciones')->onDelete('cascade');
			$t->timestamps();
		});
		Schema::create('gastos', function($t) {
			$t->increments('id');
			$t->string('nombre');
			$t->integer('total');
			$t->integer('proyecto_id')->unsigned();
			$t->foreign('proyecto_id')
				->references('id')
				->on('proyectos')->onDelete('cascade');
			$t->timestamps();
		});
		Schema::create('likes', function($t) {
			$t->increments('id');
			$t->integer('user_id')->unsigned()->nullable();
			$t->integer('proyecto_id');
			$t->string('state');
			$t->timestamps();
		});
		Schema::create('comments', function($t) {
			$t->increments('id');
			$t->string('content');
			$t->integer('proyecto_id')->unsigned()->nullable();
			$t->integer('user_id')->unsigned()->nullable();
			$t->timestamps();
		});
		Schema::create('users', function($t) {
			$t->increments('id');
			$t->string('name');
			$t->string('email');
			$t->string('password');
			$t->string('remember_token');
			$t->timestamps();
		});
		Schema::create('proyecto_admin', function($t) {
			$t->increments('id');
			$t->integer('user_id')->unsigned();
			$t->integer('proyect_id')->unsigned();
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
