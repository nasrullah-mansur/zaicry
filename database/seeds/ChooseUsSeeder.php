<?php

use App\Chooseus;
use Illuminate\Database\Seeder;

class ChooseUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chooseus::create([
            'chooseus_heading' => 'We Provide Smart & Digital Services.',
            'chooseus_description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</div><div><br></div>',
            'chooseus_feature' => '<div><strong>Unlimited Features<br></strong>Contrary to popular belief, Lorem Ipsum is not simply random text.<br><br></div><div><strong>Communication &amp; Sharing</strong></div><div>Contrary to popular belief, Lorem Ipsum is not simply random text.</div>,
            ',
            'photo_id' => 2
        ]);
    }
}
