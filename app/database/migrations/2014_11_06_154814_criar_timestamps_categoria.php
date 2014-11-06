<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTimestampsCategoria extends Migration {

	public function up()
	{
		Schema::table('categorias', function($table){
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('categorias');
	}

}
