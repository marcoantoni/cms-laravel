<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarRememberTokenUsuario extends Migration {


	public function up()
	{
		Schema::table('usuarios', function($table){
			$table->string('remember_token', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('usuarios');
	}

}


