<?php

use App\Pricingarea;
use Illuminate\Database\Seeder;

class PricingAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pricingarea::create([
            'pricing_area_main_heading' => 'Our Pricing Plan',
            'pricing_area_heading' => 'Check Our Flexible Plan',
            'pricing_area_description' => '<div>Contrary to popular belief, Lorem Ipsum is not simply random<br>text. It has roots in a piece of classical Latin literature.</div>',
        ]);
    }
}
