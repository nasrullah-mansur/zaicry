<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('heading');
            $table->string('title');
            $table->longText('description');
            $table->string('contact_form_heading');
            $table->longText('contact_form_description');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('skype');
            $table->string('social_media_link1');
            $table->string('social_media_link2');
            $table->string('social_media_link3');
            $table->string('social_media_link4');
            $table->string('google_map_api');
            $table->string('google_map_lat');
            $table->string('google_map_long');
            $table->string('google_map_location_info');
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
        Schema::dropIfExists('contacts');
    }
}
