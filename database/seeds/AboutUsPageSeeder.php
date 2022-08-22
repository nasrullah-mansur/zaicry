<?php

use App\AboutUsPage;
use Illuminate\Database\Seeder;

class AboutUsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUsPage::create([
            'main_heading' => 'Why Choose Us',
            'choose_us_title' => 'Track and Analyze your Business Statistics.',
            'choose_us_heading' => 'Why Choose Us',
            'choose_us_description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.Contrary to popular belief, Lorem Ipsum .<br><br></div><ul><li>25 years of Experience</li></ul><div><br></div><div>Contrary to popular belief, Lorem Ipsum is not simply random text.<br><br></div>',
            'choose_us_button_text' => 'Explore More',
            'choose_us_icon1' => 23,
            'choose_us_text1' => '<div>210 More&nbsp;<br><br>Happy clients</div>',
            'choose_us_icon2' => 24,
            'choose_us_text2' => '<div>24 Hour&nbsp;<br><br>Technical support</div>',
            'choose_us_icon3' => 25,
            'choose_us_text3' => '<div>700 More&nbsp;<br><br>Projects complete</div>',
        ]);
    }
}
