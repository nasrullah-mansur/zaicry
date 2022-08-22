<?php

use App\BlogSingleSetting;
use Illuminate\Database\Seeder;

class BlogSingleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogSingleSetting::create([
            'blog_title' => 'Latest News',
            'recent_blogs_title' => 'Our Recent Blogs',
            'recent_blog_description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.',
            'categories_title' => 'Categories',
            'recent_blog_title' => 'Popular News',
            'recent_post_item' => '3',
            'popular_tags_title' => 'Popular Tags',

        ]);
    }
}
