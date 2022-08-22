<?php

use App\JobsPage;
use Illuminate\Database\Seeder;

class JobsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobsPage::create([
            'main_heading' => 'Join Our Team',
            'heading' => 'Job Join',
            'title' => 'Job Opening',
            'description' => '<div>Veritatis eum volupt.</div>',
            'counter1' => '55',
            'counter1_text' => 'Amet suscipit persp',
            'counter2' => '33',
            'counter2_text' => 'Itaque mollit est ni',
            'counter3' => '37',
            'counter3_text' => 'Quo quas voluptatem',
            'counter4' => '51',
            'counter4_text' => 'Vero natus placeat',
            'job_opening_heading' => 'Job Join',
            'job_opening_title' => 'Job Opening',
            'job_process_heading' => 'Process',
            'job_process_title' => 'Know About Our Requirement Process',
            'job_process_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nulla mauris ultrices fermentum,',
            'job_process_step1' => 'CV Submission',
            'job_process_step2' => 'Appointment',
            'job_process_step3' => 'Skill Assesment',
            'job_process_step4' => 'Final Interview',
        ]);
    }
}
