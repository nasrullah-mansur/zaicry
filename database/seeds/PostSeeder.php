<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'title' => 'It Is A Long Established Fact That A Reader Will Be Dist Acted By The Readable.',
            'description' => '<div>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using, making it look like readable English..It is a long established fact .<br><br></div><blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</blockquote><div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.<br><br></div>',
            'category_id' => '1',
            'photo_id' => 16
        ]);
        Post::create([
            'user_id' => 1,
            'title' => 'It Is A Long Established Fact That A Reader Will Be Dist Acted By The Readable.',
            'description' => '<div>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using, making it look like readable English..It is a long established fact .<br><br></div><blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</blockquote><div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.<br><br></div>',
            'category_id' => '2',
            'photo_id' => 17
        ]);
        Post::create([
            'user_id' => 1,
            'title' => 'It Is A Long Established Fact That A Reader Will Be Dist Acted By The Readable.',
            'description' => '<div>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using, making it look like readable English..It is a long established fact .<br><br></div><blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</blockquote><div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.<br><br></div>',
            'category_id' => '1',
            'photo_id' => 18
        ]);
    }
}
