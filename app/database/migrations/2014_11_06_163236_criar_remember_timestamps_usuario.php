<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarRememberTimestampsUsuario extends Migration {


	public function up()
	{
		Schema::table('usuarios', function($table){
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('usuarios');
	}

}
