<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemistersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semisters', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('details');
			$table->date('start_date');
			$table->date('end_date');
			$table->integer('departments_id');
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
		Schema::drop('semisters');
	}

}
