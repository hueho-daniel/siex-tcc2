<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			// Dados de login
			$table->string("email");
			$table->string("password");

			// Dados do usuário
			$table->string('name');
			$table->string('phone');
			$table->string('fax');
			$table->string('cel');
			$table->string('site');
			$table->string('cpf');

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
		Schema::drop('users');
	}

}
