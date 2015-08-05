<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_types', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('rooms_available')->nullable();
            $table->integer('minimum_stay')->default(1);
            $table->integer('maximum_stay')->default(1);

            $table->unsignedInteger('property_id')->nullable();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('set null');

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
		Schema::drop('room_types');
	}

}
