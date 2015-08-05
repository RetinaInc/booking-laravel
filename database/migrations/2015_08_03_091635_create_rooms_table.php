<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id');
            $table->unsignedInteger('room_type_id')->nullable();
            $table->foreign('room_type_id')->references('id')->on('room_types')->onDelete('set null');

            $table->string('name');
            $table->string('description');

            $table->unsignedInteger('property_id')->nullable();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('set null');

            $table->boolean('is_published')->nullable();

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
		Schema::drop('rooms');
	}

}
