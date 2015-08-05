<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTypeReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_type_reservations', function(Blueprint $table)
		{
			$table->increments('id');

            $table->unsignedInteger('room_type_calendar_id')->nullable();
            $table->foreign('room_type_calendar_id')->references('id')->on('room_type_calendars')->onDelete('cascade');

            $table->date('check_in');
            $table->date('check_out');

            $table->unsignedInteger('nb_adults');
            $table->unsignedInteger('nb_children');
            $table->string('ages');

            $table->text('notes');
            $table->boolean('is_agent')->nullable();

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
		Schema::drop('room_type_reservations');
	}

}
