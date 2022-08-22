<?php

use App\ServicePage;
use Illuminate\Database\Seeder;

class ServicePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServicePage::create([
            'heading' => 'Our Services',
            'title' => 'Check It Out Our Some Cool Features',
            'description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</div>',
            'photo_id' => 56,

        ]);
    }
}
