<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetDateStyle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER DATABASE '.DB::connection()->getDatabaseName().' SET datestyle TO ISO, DMY');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER DATABASE '.DB::connection()->getDatabaseName().' SET datestyle TO ISO, MDY');
	}

}
