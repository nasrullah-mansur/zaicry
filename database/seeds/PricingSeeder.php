<?php

use App\Pricing;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pricing::create([
            'pricing_package' => 'Monthly',
            'photo_id' => 14,
            'pricing_heading' => 'Starter pack',
            'pricing_amount' => 200,
            'pricing_list' => '<ul><li>10 Key Words Optimized</li><li>3 Top 10 Ranking Guarantee</li><li>Web site Analysis</li><li>Keyword Research and Analysis</li><li>Content Optimization</li></ul><div><br></div>',
            'pricing_button_text' => 'Register Now',
        ]);
        Pricing::create([
            'pricing_package' => 'Annually',
            'photo_id' => 15,
            'pricing_heading' => 'Starter pack',
            'pricing_amount' => 199,
            'pricing_list' => '<ul><li>10 Key Words Optimized</li><li>3 Top 10 Ranking Guarantee</li><li>Web site Analysis</li><li>Keyword Research and Analysis</li><li>Content Optimization</li></ul><div><br></div>',
            'pricing_button_text' => 'Register Now',
        ]);
        Pricing::create([
            'pricing_package' => 'Annually',
            'photo_id' => 43,
            'pricing_heading' => 'Starter pack',
            'pricing_amount' => 399,
            'pricing_list' => '<ul><li>10 Key Words Optimized</li><li>3 Top 10 Ranking Guarantee</li><li>Web site Analysis</li><li>Keyword Research and Analysis</li><li>Content Optimization</li></ul><div><br></div>',
            'pricing_button_text' => 'Register Now',
        ]);
        Pricing::create([
            'pricing_package' => 'Monthly',
            'photo_id' => 44,
            'pricing_heading' => 'Premium Pack',
            'pricing_amount' => 399,
            'pricing_list' => '<ul><li>10 Key Words Optimized</li><li>3 Top 10 Ranking Guarantee</li><li>Web site Analysis</li><li>Keyword Research and Analysis</li><li>Content Optimization</li></ul><div><br></div>',
            'pricing_button_text' => 'Register Now',
        ]);
        Pricing::create([
            'pricing_package' => 'Annually',
            'photo_id' => 45,
            'pricing_heading' => 'Advance Pack',
            'pricing_amount' => 299,
            'pricing_list' => '<ul><li>10 Key Words Optimized</li><li>3 Top 10 Ranking Guarantee</li><li>Web site Analysis</li><li>Keyword Research and Analysis</li><li>Content Optimization</li></ul><div><br></div>',
            'pricing_button_text' => 'Register Now',
        ]);
        Pricing::create([
            'pricing_package' => 'Monthly',
            'photo_id' => 46,
            'pricing_heading' => 'Premium Pack',
            'pricing_amount' => 399,
            'pricing_list' => '<ul><li>10 Key Words Optimized</li><li>3 Top 10 Ranking Guarantee</li><li>Web site Analysis</li><li>Keyword Research and Analysis</li><li>Content Optimization</li></ul><div><br></div>',
            'pricing_button_text' => 'Register Now',
        ]);
    }
}
