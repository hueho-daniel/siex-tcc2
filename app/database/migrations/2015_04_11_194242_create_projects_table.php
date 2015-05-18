<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');

			// Dados iniciais			
			$table->date('recorded_at')->nullable();
			$table->string('status')->default("Cadastrada")->nullable();

			// Dados do contato
			$table->string('contact_name')->nullable();
			$table->string('contact_phone')->nullable();
			$table->string('contact_fax')->nullable();
			$table->string('contact_cel')->nullable();
			$table->string('contact_email')->nullable();
			$table->string('contact_site')->nullable();

			// Dados do projeto
			$table->string('title')->nullable();
			$table->string('theme')->nullable();
			$table->string('full_content_file_name')->nullable();
			$table->string('full_content_type')->nullable();
			$table->binary('full_content')->nullable();
			$table->longText('description')->nullable();
			$table->string('file_name')->nullable();
			$table->integer('student_count')->nullable();
			$table->integer('workload')->nullable();
			$table->string('campus')->nullable();
			$table->integer('estimated_audience')->nullable();
			$table->string('action')->default("Curricular")->nullable();
			$table->decimal('financial_aid')->nullable();

			// Tabelas associadas
			$table->integer('program_id');
			// $table->foreign('program_id')->references('id')->on('programs');

			$table->integer('user_id');
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
		Schema::drop('projects');
	}

}
