<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'slider_heading' => 'Build your Audience and Grow your Brand',
            'slider_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida imperdiet morbi enim vestibulum ut pulvinar. Sed ac nulla amet interdum. Sem id elit ac, etiam.',
            'photo_id' => 1,
            'video_id' => 1
        ]);
    }
}
