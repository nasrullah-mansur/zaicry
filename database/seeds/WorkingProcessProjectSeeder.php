<?php

use App\WorkingProcessProject;
use Illuminate\Database\Seeder;

class WorkingProcessProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkingProcessProject::create([
            'photo_id' => 7,
            'project_heading' => 'Research Projects',
            'project_description' => '<div>Lorem ipsum dolor sit amet consectetur adipisicing .</div>',
        ]);
        WorkingProcessProject::create([
            'photo_id' => 8,
            'project_heading' => 'Research Projects',
            'project_description' => '<div>Lorem ipsum dolor sit amet consectetur adipisicing .</div>',
        ]);
        WorkingProcessProject::create([
            'photo_id' => 9,
            'project_heading' => 'Research Projects',
            'project_description' => '<div>Lorem ipsum dolor sit amet consectetur adipisicing .</div>',
        ]);
        WorkingProcessProject::create([
            'photo_id' => 10,
            'project_heading' => 'Research Projects',
            'project_description' => '<div>Lorem ipsum dolor sit amet consectetur adipisicing .</div>',
        ]);
    }
}
