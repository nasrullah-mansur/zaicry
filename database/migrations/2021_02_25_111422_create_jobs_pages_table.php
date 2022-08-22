<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_pages', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('heading');
            $table->string('title');
            $table->longText('description');
            $table->string('counter1');
            $table->string('counter1_text');
            $table->string('counter2');
            $table->string('counter2_text');
            $table->string('counter3');
            $table->string('counter3_text');
            $table->string('counter4');
            $table->string('counter4_text');
            $table->string('job_opening_heading');
            $table->string('job_opening_title');
            $table->string('job_process_heading');
            $table->string('job_process_title');
            $table->longText('job_process_description');
            $table->string('job_process_step1');
            $table->string('job_process_step2');
            $table->string('job_process_step3');
            $table->string('job_process_step4');
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
        Schema::dropIfExists('jobs_pages');
    }
}
