<?php

use App\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seo::create([
            'site_meta_tags' => 'blog,ziacri,green',
            'site_meta_description' => '<div>site meta description</div>'
        ]);
    }
}
