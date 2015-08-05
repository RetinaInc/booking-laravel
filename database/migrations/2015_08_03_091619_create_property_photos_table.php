<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_photos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('position')->nullable();
            $table->string('filename', 255);
            $table->text('description')->nullable();
            $table->unsignedInteger('property_id')->nullable();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('set null');
            $table->boolean('is_default')->nullable();
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
		Schema::drop('property_photos');
	}

}
