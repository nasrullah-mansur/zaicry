<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_pages', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('choose_us_title');
            $table->string('choose_us_heading');
            $table->longText('choose_us_description');
            $table->string('choose_us_button_text');
            $table->integer('choose_us_icon1');
            $table->string('choose_us_text1');
            $table->integer('choose_us_icon2');
            $table->string('choose_us_text2');
            $table->integer('choose_us_icon3');
            $table->string('choose_us_text3');
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
        Schema::dropIfExists('about_us_pages');
    }
}
