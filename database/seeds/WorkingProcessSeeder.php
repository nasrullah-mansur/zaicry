<?php

use App\Workprocess;
use Illuminate\Database\Seeder;

class WorkingProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workprocess::create([
            'workprocess_main_heading' => 'Polls And Surveys',
            'workprocess_heading' => 'Know our working process',
            'workprocess_description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random<br>text. It has roots in a piece of classical Latin literature.</div>',

        ]);
    }
}
