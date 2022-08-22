<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChooseusExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chooseus_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chooseus_id');
            $table->string('chooseus_experience_no');
            $table->string('chooseus_experience_text');
            $table->string('photo_id')->nullable();

            $table->foreign('chooseus_id')->references('id')->on('chooseuses')->onDelete('cascade');
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
        Schema::dropIfExists('chooseus_experiences');
    }
}
