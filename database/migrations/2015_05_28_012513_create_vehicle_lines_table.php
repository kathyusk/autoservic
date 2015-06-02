<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleLinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create ('vehicle_lines',function(Blueprint $table){
           $table->increments('id');
            $table->string('name');
            $table->integer('vehicle_type')->unsigned();
            $table->integer('vehicle_branch')->unsigned();

            $table->foreign('vehicle_type')->reference('id')->on('vehicle_types');
            $table->foreign('vehicle_branch')->reference('id')->on('vehicle_branches');
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
		Schema::drop ('vehicle_lines');
	}

}
