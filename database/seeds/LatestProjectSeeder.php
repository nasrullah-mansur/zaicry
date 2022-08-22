<?php

use App\Latestproject;
use Illuminate\Database\Seeder;

class LatestProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Latestproject::create([
            'latestproject_main_heading' => 'Latest Projects',
            'latestproject_heading' => 'Here Is Some Of Our Case Studies',
            'latestproject_description' => 'Contrary to popular belief, Lorem Ipsum is not simply random
            text. It has roots in a piece of classical Latin literature.',
        ]);
    }
}
