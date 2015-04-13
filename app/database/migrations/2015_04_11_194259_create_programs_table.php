<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programs', function(Blueprint $table)
		{
			$table->increments('id');

			// Dados iniciais			
			$table->date('recorded_at');
			$table->string('status')->default("Cadastrada");

			// Dados do contato
			$table->string('contact_name');
			$table->string('contact_phone');
			$table->string('contact_fax');
			$table->string('contact_cel');
			$table->string('contact_email');
			$table->string('contact_site');

			// Dados do programa
			$table->string('title');
			$table->string('theme');
			$table->longText('description');
			$table->string('file_name');
			$table->integer('student_count');
			$table->integer('workload');
			$table->string('campus');
			$table->integer('estimated_audience');
			$table->string('action')->default("Curricular");
			$table->decimal('financial_aid');

			// Tabelas associadas
			// $table->integer('user_id');
			// $table->foreign('user_id')->references('id')->on('users');

			// Dados de uso interno
			$table->boolean('complete')->default(false);

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
		Schema::drop('programs');
	}

}
