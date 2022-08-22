<?php

use App\PricingButton;
use Illuminate\Database\Seeder;

class PricingButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PricingButton::create([
            'button_text' => 'Annual',
            'pricing_id' => 3
        ]);
        PricingButton::create([
            'button_text' => 'Annual',
            'pricing_id' => 4
        ]);
        PricingButton::create([
            'button_text' => 'Distinctio Sed non',
            'pricing_id' => 5
        ]);
        PricingButton::create([
            'button_text' => 'Labore consequatur',
            'pricing_id' => 6
        ]);
    }
}
