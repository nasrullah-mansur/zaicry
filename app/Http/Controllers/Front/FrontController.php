<?php

namespace App\Http\Controllers\Front;

use App\Seo;
use App\Post;
use App\Site;
use App\Slider;
use App\Pricing;
use App\Service;
use App\Chooseus;
use App\Showhide;
use App\CustomCss;
use App\Preloader;
use App\AboutUsPage;
use App\Pricingarea;
use App\ServicePage;
use App\Testimonial;
use App\Workprocess;
use App\BasicSetting;
use App\ServiceChild;
use App\Latestproject;
use App\HomePageVersion;
use App\BlogPageSettting;
use App\BlogSingleSetting;
use App\TestimonialSlider;
use App\ChooseusExperience;
use App\LatestprojectSlider;
use Illuminate\Http\Request;
use App\WorkingProcessProject;
use Harimayco\Menu\Facades\Menu;
use Harimayco\Menu\Models\Menus;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class FrontController extends Controller
{
    public function index()
    {
        if (file_exists(storage_path('installed'))) {
            $slider = Slider::first();
            $service = Service::first();
            $serviceboxs = ServiceChild::all();
            $chooseus = Chooseus::first();
            $ChooseusExperience = ChooseusExperience::all();
            $workprocess = Workprocess::first();
            $workprocessproject = WorkingProcessProject::all();
            $latestproject = Latestproject::first();
            $latestprojectsliders = LatestprojectSlider::all();
            $pricingarea = Pricingarea::first();
            $pricings = Pricing::with('pricingButton')->get();
            $testimonial = Testimonial::first();
            $testimonialslider = TestimonialSlider::all();
            $blogpagesettting = BlogPageSettting::first();
            $blogsinglesetting = BlogSingleSetting::first();
            $servicechild = ServiceChild::all();

            $post = Post::oldest()->limit($blogpagesettting->post_item)->get();
            $site = Site::first();
            $seo = Seo::first();


            $public_menu = Menu::getByName('Main Menu');
            $basicsetting = Site::first();
            $customcss = CustomCss::first();
            $preloader = Preloader::first();


            //other home page
            $aboutuspage = AboutUsPage::first();
            $servicepage = ServicePage::first();


            //homepage
            $homepageversion = HomePageVersion::first();

            if ($homepageversion->version == 2) {
                return view('front.index2', compact('slider', 'service', 'serviceboxs', 'chooseus', 'ChooseusExperience', 'workprocess', 'workprocessproject', 'latestproject', 'latestprojectsliders', 'pricingarea', 'pricings', 'testimonial', 'testimonialslider', 'post', 'site', 'public_menu', 'blogpagesettting', 'blogsinglesetting', 'basicsetting', 'customcss', 'preloader', 'aboutuspage', 'servicepage', 'homepageversion', 'seo', 'servicechild'));
            }
            if ($homepageversion->version == 3) {
                return view('front.index3', compact('slider', 'service', 'serviceboxs', 'chooseus', 'ChooseusExperience', 'workprocess', 'workprocessproject', 'latestproject', 'latestprojectsliders', 'pricingarea', 'pricings', 'testimonial', 'testimonialslider', 'post', 'site', 'public_menu', 'blogpagesettting', 'blogsinglesetting', 'basicsetting', 'customcss', 'preloader', 'aboutuspage', 'servicepage', 'homepageversion', 'seo', 'servicechild'));
            }
            if ($homepageversion->version == 4) {
                return view('front.index4', compact('slider', 'service', 'serviceboxs', 'chooseus', 'ChooseusExperience', 'workprocess', 'workprocessproject', 'latestproject', 'latestprojectsliders', 'pricingarea', 'pricings', 'testimonial', 'testimonialslider', 'post', 'site', 'public_menu', 'blogpagesettting', 'blogsinglesetting', 'basicsetting', 'customcss', 'preloader', 'aboutuspage', 'servicepage', 'homepageversion', 'seo', 'servicechild'));
            }
            return view('front.index', compact('slider', 'service', 'serviceboxs', 'chooseus', 'ChooseusExperience', 'workprocess', 'workprocessproject', 'latestproject', 'latestprojectsliders', 'pricingarea', 'pricings', 'testimonial', 'testimonialslider', 'post', 'site', 'public_menu', 'blogpagesettting', 'blogsinglesetting', 'basicsetting', 'customcss', 'preloader', 'aboutuspage', 'servicepage', 'homepageversion', 'seo', 'servicechild'));
        } else {
            return redirect()->to('/install');
        }
    }
}
