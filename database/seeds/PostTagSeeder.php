<?php

use App\PostTag;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostTag::create([
            'post_id' => 1,
            'tag_id' => 1
        ]);
        PostTag::create([
            'post_id' => 2,
            'tag_id' => 2
        ]);
    }
}
