<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtherOptionsToServicesChildPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services_child', function (Blueprint $table) {
            $table->string('service_single_heading');
            $table->longText('service_single_title');
            $table->longText('service_single_description');
            $table->string('service_single_detail_heading');
            $table->longText('service_single_detail_description');
            $table->integer('photo_id2');
            $table->integer('photo_id3');
            $table->string('service_single_support_1_heading');
            $table->longText('service_single_support_1_description');
            $table->string('service_single_support_2_heading');
            $table->longText('service_single_support_2_description');
            $table->string('service_single_support_3_heading');
            $table->longText('service_single_support_3_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services_child', function (Blueprint $table) {
            Schema::dropIfExists('services_child');
        });
    }
}
