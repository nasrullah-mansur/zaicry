<?php

use App\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'photo_id' => 34,
            'title' => 'Tempor culpa quas es',
            'description' => 'Corporis vel digniss',
            'portfolio_category_id' => 3,
        ]);
        Portfolio::create([
            'photo_id' => 35,
            'title' => 'Tempor culpa quas es',
            'description' => 'Corporis vel digniss',
            'portfolio_category_id' => 3,
        ]);
        Portfolio::create([
            'photo_id' => 36,
            'title' => 'Tempor culpa quas es',
            'description' => 'Corporis vel digniss',
            'portfolio_category_id' => 5,
        ]);
        Portfolio::create([
            'photo_id' => 37,
            'title' => 'Tempor culpa quas es',
            'description' => 'Corporis vel digniss',
            'portfolio_category_id' => 5,
        ]);
        Portfolio::create([
            'photo_id' => 38,
            'title' => 'Tempor culpa quas es',
            'description' => 'Corporis vel digniss',
            'portfolio_category_id' => 5,
        ]);
        Portfolio::create([
            'photo_id' => 39,
            'title' => 'Tempor culpa quas es',
            'description' => 'Corporis vel digniss',
            'portfolio_category_id' => 1,
        ]);
        Portfolio::create([
            'photo_id' => 40,
            'title' => 'Tempor culpa quas es',
            'description' => 'Corporis vel digniss',
            'portfolio_category_id' => 5,
        ]);
        Portfolio::create([
            'photo_id' => 42,
            'title' => 'Tempor culpa quas es',
            'description' => 'Corporis vel digniss',
            'portfolio_category_id' => 5,
        ]);
    }
}
