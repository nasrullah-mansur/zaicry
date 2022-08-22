<?php

use App\JobsFacility;
use Illuminate\Database\Seeder;

class JobsFacilitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobsFacility::create([
            'photo_id' => 28,
            'title' => 'Nice Office Room',
            'description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus mattis viverra accumsan porta leo, egestas enim.</div>',
        ]);
        JobsFacility::create([
            'photo_id' => 29,
            'title' => 'Friendly Co-Workers',
            'description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus mattis viverra accumsan porta leo, egestas enim.</div>',
        ]);
        JobsFacility::create([
            'photo_id' => 30,
            'title' => 'Easy Office Location',
            'description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus mattis viverra accumsan porta leo, egestas enim.</div>',
        ]);
        JobsFacility::create([
            'photo_id' => 31,
            'title' => 'Educational Opportunity',
            'description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus mattis viverra accumsan porta leo, egestas enim.</div>',
        ]);
        JobsFacility::create([
            'photo_id' => 32,
            'title' => 'Lunch & Snacks',
            'description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus mattis viverra accumsan porta leo, egestas enim.</div>',
        ]);
        JobsFacility::create([
            'photo_id' => 33,
            'title' => 'Performance Award',
            'description' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus mattis viverra accumsan porta leo, egestas enim.</div>',
        ]);
    }
}
