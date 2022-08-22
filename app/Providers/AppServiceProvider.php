<?php

namespace App\Providers;

use App\Seo;
use App\Post;
use App\Site;
use App\Contact;
use App\Showhide;
use App\ServiceChild;
use App\HomePageVersion;
use App\Preloader;
use Harimayco\Menu\Facades\Menu;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (file_exists(storage_path('installed'))) {

            $seo = Seo::first();
            $site =  Site::first();
            $basicsetting =  Site::first();
            $posts =  Post::latest()->take(3)->get();
            $footer_menu = Menu::getByName('Footer Menu');
            $public_menu = Menu::getByName('Main Menu');
            $pages_menu = Menu::getByName('Pages Menu');

            $homepageversion = HomePageVersion::first();
            $global_social_contact = Contact::first();
            $serviceschild = ServiceChild::all();
            $preloader = Preloader::first();
            view()->share(['preloader' => $preloader, 'serviceschild' => $serviceschild, 'global_social_contact' => $global_social_contact, 'homepageversion' => $homepageversion, 'basicsetting' => $basicsetting, 'seo' => $seo, 'site' => $site, 'posts' => $posts, 'footer_menu' => $footer_menu, 'public_menu' => $public_menu, 'pages_menu' => $pages_menu]);
        }
    }
}
