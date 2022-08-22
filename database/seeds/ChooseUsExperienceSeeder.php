<?php

use App\ChooseusExperience;
use Illuminate\Database\Seeder;

class ChooseUsExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChooseusExperience::create([
            'chooseus_id' => 1,
            'chooseus_experience_no' => 15,
            'chooseus_experience_text' => 'Years Of Experience',
            'photo_id' => 3
        ]);
        ChooseusExperience::create([
            'chooseus_id' => 1,
            'chooseus_experience_no' => 210,
            'chooseus_experience_text' => 'Happy Clients',
            'photo_id' => 4
        ]);
        ChooseusExperience::create([
            'chooseus_id' => 1,
            'chooseus_experience_no' => 700,
            'chooseus_experience_text' => 'Projects Complete',
            'photo_id' => 5,
        ]);
        ChooseusExperience::create([
            'chooseus_id' => 1,
            'chooseus_experience_no' => 24,
            'chooseus_experience_text' => 'Technical Support',
            'photo_id' => 6,
        ]);
    }
}
