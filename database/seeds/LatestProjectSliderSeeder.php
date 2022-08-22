<?php

use App\LatestprojectSlider;
use Illuminate\Database\Seeder;

class LatestProjectSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LatestprojectSlider::create([
            'photo_id' => 11,
            'latestproject_heading' => 'Erp Software for Banking sector in Bangladesh',
            'latestproject_description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna id a arcu sagittis tincidunt malesuada turpis. In dolor diam nulla sem </div>',
            'latestproject_button' => 'View Case Study',
        ]);
        LatestprojectSlider::create([
            'photo_id' => 12,
            'latestproject_heading' => 'Erp Software for Banking sector in Bangladesh',
            'latestproject_description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna id a arcu sagittis tincidunt malesuada turpis. In dolor diam nulla sem </div>',
            'latestproject_button' => 'View Case Study',
        ]);
        LatestprojectSlider::create([
            'photo_id' => 13,
            'latestproject_heading' => 'Erp Software for Banking sector in Bangladesh',
            'latestproject_description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna id a arcu sagittis tincidunt malesuada turpis. In dolor diam nulla sem </div>',
            'latestproject_button' => 'View Case Study',
        ]);
    }
}
