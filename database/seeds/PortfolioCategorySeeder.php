<?php

use App\PortfolioCategory;
use Illuminate\Database\Seeder;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioCategory::create([
            'name' => 'Branding'
        ]);
        PortfolioCategory::create([
            'name' => 'Agency'
        ]);
        PortfolioCategory::create([
            'name' => 'Marketing'
        ]);
        PortfolioCategory::create([
            'name' => 'Seo'
        ]);
        PortfolioCategory::create([
            'name' => 'Web'
        ]);
        PortfolioCategory::create([
            'name' => 'Affiliate'
        ]);
    }
}
