<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdArtigo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comentarios', function(Blueprint $table)
		{
			$table->integer('artigo')->unsigned()->index();
			$table->foreign('artigo')->references('id')->on('artigos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comentarios', function(Blueprint $table)
		{
			$table->dropColumn('artigo');
		});
	}

}
