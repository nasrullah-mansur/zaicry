<?php

use App\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'main_heading' => 'FAQ',
            'heading' => 'FAQ',
            'title' => 'FAQ',
            'description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random<br>text. It has roots in a piece of classical Latin literature.</div>',

        ]);
    }
}
