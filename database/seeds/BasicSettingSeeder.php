<?php

use App\BasicSetting;
use Illuminate\Database\Seeder;

class BasicSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BasicSetting::create([
            'site_title' => 'Zaicri',
            'site_tagline' => 'zaicri',
            'footer_copyright' => '<div><strong>2021</strong> © All rights reserved by <a href="http://www.google.com/">Zainiklab</a></div>',
            'photo_id' => 21,

        ]);
    }
}
