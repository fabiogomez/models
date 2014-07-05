<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerfilModels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::table('profiles_models',function ($table))
		{
			$table->create();
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->date('birth');
			$table->string('home_town_city_id');
			$table->string('city_residence');
			$table->string('time_experience');
			$table->string('age');
			$table->string('age');

		}//fin de la funcion
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
