<?php

use App\Site;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site::create([
            'title' => 'zainiks',
            'footer_copyright' => '<div>2020 © All rights reserved by <a href="#">Zainiklab</a></div>',
            'photo_id' => 59,
            'photo_id2' => 60,
            'footer_heading' => '<div>Be.Creative</div>',
            'site_address' => '<div>080-123456</div>',
            'site_support_text' => '(24/7 support)',
            'phone' => '2999229229',
            'email' => 'info@example.com'
        ]);
    }
}
