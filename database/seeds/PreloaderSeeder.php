<?php

use App\Preloader;
use Illuminate\Database\Seeder;

class PreloaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preloader::create([
            'on_off' => 0,
            'text' => 'Zaicre'
        ]);
    }
}
