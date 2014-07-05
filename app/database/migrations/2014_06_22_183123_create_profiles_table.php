<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table ('profiles', function ($table)
		{
			$table->create();
			$table->increments('id');
			$table->string('first_name',40);
			$table->string('last_name',40);
			$table->date('birth_date');
			$table->integer('home_town_city_id');
			$table->integer('recidence_city_id');
			$table->text('about_me');
			$table->integer('education_level_id');
			$table->float('height');
			$table->float('weigth');
			$table->float('eye_color');
			$table->float('hair_color');
			$table->integer('bust');
			$table->integer('middle');
			$table->integer('hip');
			$table->integer('shoe_id');
			$table->integer('contour_arm');
			$table->integer('contour_leg');
			$table->string('libs',60);
			$table->string('skin_color_id');			
			$table->string('twitter');
			$table->string('facebook',120);
			$table->string('instagram',120);
			$table->string('youtube',120);
			$table->string('pinterest',120);
			$table->string('web_page',120);
			$table->string('manager_name',120);
			$table->string('agence_name',100);
			$table->integer('agence_id');
			$table->string('phone',20);
			$table->boolean('is_phone_public');
			$table->string('phone_2',20);
			$table->boolean('is_phone2_public');
			$table->string('cellphone',20);
			$table->boolean('is_cellphone_public');
			$table->string('contact_email');			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('profiles');
	}

}
