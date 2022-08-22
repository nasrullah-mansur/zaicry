<?php

use App\AdminMenu;
use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminMenu::create([
            'name' => 'Main Menu',
        ]);

        AdminMenu::create([
            'name' => 'Footer Menu',
        ]);
    }
}
