<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleVersionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('vehicle_versions', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('vehicle_line_id')->unsigned();
            $table->string('cilindraje');
            $table->string('modelFirts');
            $table->string('modelEnd');
            $table->string('capacity');

            $table->foreign('vehicle_line_id')->references('id')->on('vehicle_lines');

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
		Schema::drop('vehicle_versions');
	}

}
