<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'main_heading' => 'Contact Us',
            'heading' => 'Contact Us',
            'title' => 'Get In Touch',
            'description' => '<div>Its crafted with the latest trend of design &amp; coded<br>with all modern approaches.</div>',
            'contact_form_heading' => 'Contact us',
            'contact_form_description' => '<div>Contrary to popular belief, Lorem Ipsum is not<br>simply random text. It has roots in a piece .</div>',
            'address' => 'Demo address #8901 Marmora Rd,Kent City, Uk.',
            'phone' => '0800-123456 (24/7 Support)',
            'email' => 'info@example.com',
            'skype' => 'Creative.Agency',
            'social_media_link1' => 'www.google.com',
            'social_media_link2' => 'www.instagram.com',
            'social_media_link3' => 'www.twitter.com',
            'social_media_link4' => 'www.linkdin.com',
            'google_map_api' => 'AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM',
            'google_map_lat' => '22.820000',
            'google_map_long' => '89.550003',
            'google_map_location_info' => 'Nirala',

        ]);
    }
}
