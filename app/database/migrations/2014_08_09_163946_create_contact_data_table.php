<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_data', function(Blueprint $table)
		{
			$table->increments('id');

			$table->unsignedInteger('contact_id');
			$table->foreign('contact_id')
						->references('id')->on('contacts')
						->onDelete('cascade');

			$table->string('type');
			$table->string('value');

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
		Schema::drop('contact_data');
	}

}
