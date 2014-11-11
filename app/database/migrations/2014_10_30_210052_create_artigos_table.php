<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artigos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('texto');
			$table->integer('status');
			
			// chave estrangeira tabela usuarios
			$table->integer('id_usuario')->unsigned();
			$table->foreign('id_usuario')->references('id')->on('usuarios');

			$table->integer('id_categoria')->unsigned();
			$table->foreign('id_categoria')->references('id')->on('categorias');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artigos');
	}

}
