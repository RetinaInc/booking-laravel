<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties', function(Blueprint $table)
		{
			$table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            $table->unsignedInteger('user_id_edited')->nullable();
            $table->foreign('user_id_edited')->references('id')->on('users')->onDelete('set null');

            $table->unsignedInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('property_types')->onDelete('set null');

            $table->unsignedInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');

            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('introduction');
            $table->text('full_description');
            $table->string('website');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('address_line_3');
            $table->string('zip_code');
            $table->string('city');
            $table->integer('stars');
            $table->integer('rating');
            $table->text('cancellation_policy');
            $table->boolean('is_published');
            $table->decimal('latitude', 12, 8);
            $table->decimal('longitude', 12, 8);
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
		Schema::drop('properties');
	}

}
