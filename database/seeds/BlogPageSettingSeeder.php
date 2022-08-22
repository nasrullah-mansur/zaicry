<?php

use App\BlogPageSettting;
use Illuminate\Database\Seeder;

class BlogPageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogPageSettting::create([
            'read_more_text' => 'Read More +',
            'post_item' => 3,
            'recent_post_widget_item' => 4

        ]);
    }
}
