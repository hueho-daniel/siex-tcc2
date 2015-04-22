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
			$table->string('email');
			$table->string('password');
			$table->string('remember_token')->nullable();

			// Dados do usuário
			$table->string('name');
			$table->string('phone')->nullable();
			$table->string('fax')->nullable();
			$table->string('cel')->nullable();
			$table->string('site')->nullable();
			$table->string('cpf')->nullable();

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
