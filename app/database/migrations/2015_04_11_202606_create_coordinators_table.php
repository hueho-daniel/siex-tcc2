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
			$table->string('name')->nullable();
			$table->string('rf')->nullable();
			$table->string('cpf')->nullable();
			$table->string('activity')->nullable();
			$table->string('workload')->nullable();
			$table->string('observation')->nullable();
			$table->boolean('editor')->default(false);

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
