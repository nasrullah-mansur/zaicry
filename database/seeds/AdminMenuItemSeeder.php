<?php

use App\AdminMenuItems;
use Illuminate\Database\Seeder;

class AdminMenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AdminMenuItems::create([
            'label' => 'Home',
            'link' => '/',
            'parent' => 0,
            'sort' => 0,
            'menu' => 1,
            'depth' => 0
        ]);
        AdminMenuItems::create([
            'label' => 'Career',
            'link' => '/jobs',
            'parent' => 0,
            'sort' => 1,
            'menu' => 1,
            'depth' => 0
        ]);
        AdminMenuItems::create([
            'label' => 'About',
            'link' => '/about',
            'parent' => 0,
            'sort' => 2,
            'menu' => 1,
            'depth' => 0
        ]);
        AdminMenuItems::create([
            'label' => 'Portfolio',
            'link' => '/portfolio',
            'parent' => 0,
            'sort' => 3,
            'menu' => 1,
            'depth' => 0
        ]);

        AdminMenuItems::create([
            'label' => 'Service',
            'link' => '/services',
            'parent' => 0,
            'sort' => 4,
            'menu' => 1,
            'depth' => 0
        ]);
        AdminMenuItems::create([
            'label' => 'Blog',
            'link' => '/blog',
            'parent' => 0,
            'sort' => 5,
            'menu' => 1,
            'depth' => 0
        ]);

        AdminMenuItems::create([
            'label' => 'Contact Us',
            'link' => '/contact',
            'parent' => 0,
            'sort' => 6,
            'menu' => 1,
            'depth' => 0
        ]);

        AdminMenuItems::create([
            'label' => 'Home',
            'link' => '/',
            'parent' => 0,
            'sort' => 0,
            'menu' => 2,
            'depth' => 1
        ]);

        AdminMenuItems::create([
            'label' => 'Services',
            'link' => '/services',
            'parent' => 0,
            'sort' => 1,
            'menu' => 2,
            'depth' => 0
        ]);
        AdminMenuItems::create([
            'label' => 'About Us',
            'link' => '/about',
            'parent' => 0,
            'sort' => 2,
            'menu' => 2,
            'depth' => 0
        ]);
        AdminMenuItems::create([
            'label' => 'Team',
            'link' => '/team',
            'parent' => 0,
            'sort' => 3,
            'menu' => 2,
            'depth' => 0
        ]);
        AdminMenuItems::create([
            'label' => 'Contact',
            'link' => '/contact',
            'parent' => 0,
            'sort' => 5,
            'menu' => 2,
            'depth' => 0
        ]);
    }
}
