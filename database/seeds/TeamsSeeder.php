<?php

use App\Team;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'main_heading' => 'Our Team',
            'heading' => 'Our Team',
            'title' => 'Meet Our Efficient Members',
            'description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random
            text. It has roots in a piece of classical Latin literature.</div>',
        ]);
    }
}
