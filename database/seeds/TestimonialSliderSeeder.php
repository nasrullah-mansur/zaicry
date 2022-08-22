<?php

use App\TestimonialSlider;
use Illuminate\Database\Seeder;

class TestimonialSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TestimonialSlider::create([
            'testimonial_description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random text.Contrary to popular belief, Lorem Ipsum is not simply random text</div>',
            'testimonial_name' => 'Preston Haleyn',
            'testimonial_title' => 'CEO of the company',
            'photo_id' => 65

        ]);
        TestimonialSlider::create([
            'testimonial_description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random text.Contrary to popular belief, Lorem Ipsum is not simply random text</div>',
            'testimonial_name' => 'Luke Keller',
            'testimonial_title' => 'CTO of the company',
            'photo_id' => 66

        ]);
    }
}
