<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatestprojectSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void~
     */
    public function up()
    {
        Schema::create('latestproject_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('photo_id');
            $table->string('latestproject_heading');
            $table->string('latestproject_description');
            $table->string('latestproject_button');
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
        Schema::dropIfExists('latestproject_sliders');
    }
}
