<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');

			// Dados iniciais			
			$table->date('recorded_at');
			$table->string('title');
			$table->string('characterization');
			$table->string('main_theme');
			$table->longText('summary');
			$table->string('kind');
			$table->string('knowledge_area');

			// Dados do contato
			$table->string('main_coordinator_name');
			$table->string('main_coordinator_cpf');
			$table->string('main_coordinator_secretary');
			$table->string('main_coordinator_secretary_cel');
			$table->string('main_coordinator_first_phone');
			$table->string('main_coordinator_second_phone');
			$table->string('main_coordinator_fax');
			$table->string('main_coordinator_cel');
			$table->string('main_coordinator_email');
			$table->string('main_coordinator_address_street');
			$table->string('main_coordinator_address_complement');
			$table->string('main_coordinator_address_number');
			$table->string('main_coordinator_address_district');
			$table->string('main_coordinator_address_city');
			$table->string('main_coordinator_address_state');
			$table->string('main_coordinator_address_postal_code');
			$table->string('department_chief');
			$table->string('discipline_chief');
			$table->string('campus');

			// Dados do evento
			$table->integer('seats');
			$table->integer('minimum_seats');
			$table->integer('workload');
			$table->date('subscribe_date_from');
			$table->date('subscribe_date_to');
			$table->date('realization_date_from');
			$table->date('realization_date_to');
			$table->string('subscribe_link');
			$table->string('site');
			$table->boolean('entry_fee');
			$table->string('realization_address_street');
			$table->string('realization_address_complement');
			$table->string('realization_address_number');
			$table->string('realization_address_district');
			$table->string('realization_address_city');
			$table->string('realization_address_state');
			$table->string('realization_address_postal_code');
			$table->boolean('selection');
			$table->longText('selection_description');
			
			$table->string('first_target_audience');
			$table->integer('first_target_audience_seats');
			$table->string('second_target_audience');
			$table->integer('second_target_audience_seats');

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
		Schema::drop('courses');
	}

}
