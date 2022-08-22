<?php

use App\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'testimonial_main_heading' => 'Testimonal',
            'testimonial_heading' => 'A Satisfied Customer Is The <br> Best  Business Strats',
            'testimonial_description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random<br>text. It has roots in a piece of classical Latin literature.</div>',
            'photo_id' => 20,

        ]);
    }
}
