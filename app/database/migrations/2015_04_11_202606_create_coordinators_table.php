<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoordinatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coordinators', function(Blueprint $table)
		{
			$table->increments('id');

			// Relacionamento para curso/evento
			$table->morphs('coordinable');

			// Dados do usuário
			$table->string('name');
			$table->string('rf');
			$table->string('cpf');
			$table->string('activity');
			$table->string('workload');
			$table->string('observation');
			$table->boolean('editor');

			// Tabelas associadas
			// $table->integer('user_id');
			// $table->foreign('user_id')->references('id')->on('users');

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coordinators');
	}

}
