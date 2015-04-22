<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');

			// Dados iniciais			
			$table->date('recorded_at')->nullable();
			$table->string('title')->nullable();
			$table->string('characterization')->nullable();
			$table->string('theme')->nullable();
			$table->longText('summary')->nullable();
			$table->string('kind')->nullable();
			$table->string('knowledge_area')->nullable();

			// Dados do contato
			$table->string('main_coordinator_name')->nullable();
			$table->string('main_coordinator_cpf')->nullable();
			$table->string('main_coordinator_secretary')->nullable();
			$table->string('main_coordinator_secretary_cel')->nullable();
			$table->string('main_coordinator_first_phone')->nullable();
			$table->string('main_coordinator_second_phone')->nullable();
			$table->string('main_coordinator_fax')->nullable();
			$table->string('main_coordinator_cel')->nullable();
			$table->string('main_coordinator_email')->nullable();
			$table->string('main_coordinator_address_street')->nullable();
			$table->string('main_coordinator_address_complement')->nullable();
			$table->string('main_coordinator_address_number')->nullable();
			$table->string('main_coordinator_address_district')->nullable();
			$table->string('main_coordinator_address_city')->nullable();
			$table->string('main_coordinator_address_state')->nullable();
			$table->string('main_coordinator_address_postal_code')->nullable();
			$table->string('department_chief')->nullable();
			$table->string('discipline_chief')->nullable();
			$table->string('campus')->nullable();

			// Dados do evento
			$table->integer('seats')->nullable();
			$table->integer('minimum_seats')->nullable();
			$table->integer('workload')->nullable();
			$table->date('subscribe_date_from')->nullable();
			$table->date('subscribe_date_to')->nullable();
			$table->date('realization_date_from')->nullable();
			$table->date('realization_date_to')->nullable();
			$table->string('subscribe_link')->nullable();
			$table->string('site')->nullable();
			$table->boolean('entry_fee')->nullable();
			$table->string('realization_address_street')->nullable();
			$table->string('realization_address_complement')->nullable();
			$table->string('realization_address_number')->nullable();
			$table->string('realization_address_district')->nullable();
			$table->string('realization_address_city')->nullable();
			$table->string('realization_address_state')->nullable();
			$table->string('realization_address_postal_code')->nullable();
			
			$table->string('first_target_audience')->nullable();
			$table->integer('first_target_audience_seats')->nullable();
			$table->string('second_target_audience')->nullable();
			$table->integer('second_target_audience_seats')->nullable();

			// Tabelas associadas
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
		Schema::drop('events');
	}

}
