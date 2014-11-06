<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTipoUsuario extends Migration {

	public function up()
	{
		Schema::table('usuarios', function($table){
			$table->enum('tipo', array('admin', 'autor'));
		});
	}

	public function down()
	{
		Schema::drop('usuarios');
	}

}
