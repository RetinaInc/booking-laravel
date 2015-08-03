<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTypeCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_type_calendars', function(Blueprint $table)
		{
			$table->increments('id');

            $table->unsignedInteger('room_type_id')->nullable();
            $table->foreign('room_type_id')->references('id')->on('room_types')->onDelete('cascade');

            $table->date('day');
            $table->decimal('price');

            $table->boolean('is_booked');

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
		Schema::drop('room_type_calendars');
	}

}
