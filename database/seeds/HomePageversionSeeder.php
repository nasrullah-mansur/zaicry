<?php

use App\HomePageVersion;
use Illuminate\Database\Seeder;

class HomePageversionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomePageVersion::create([
            'version' => 1
        ]);
    }
}
