<?php

use App\CommingSoon;
use Illuminate\Database\Seeder;

class CommingSoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommingSoon::create([
            'heading' => 'We Are Launching Soons',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  The countdown is finished!',
            'social_media_link1' => 'www.google.com',
            'social_media_link2' => 'www.instagram.com',
            'social_media_link3' => 'www.twitter.com',
            'social_media_link4' => 'www.linkdin.com',
        ]);
    }
}
