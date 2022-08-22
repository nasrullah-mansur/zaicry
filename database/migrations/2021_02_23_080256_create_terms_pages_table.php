<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms_pages', function (Blueprint $table) {
            $table->id();
            $table->string('terms_page_main_heading');
            $table->string('terms_page_title');
            $table->longText('terms_page_heading_description');
            $table->longText('terms_page_description');
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
        Schema::dropIfExists('terms_pages');
    }
}
