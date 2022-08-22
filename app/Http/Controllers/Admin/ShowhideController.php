<?php

namespace App\Http\Controllers\Admin;

use App\Showhide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Support\Facades\Validator;

class ShowhideController extends Controller
{
    public function index()
    {
        $showhides = Showhide::all();
        $slider = Showhide::where('name', 'slider')->first();
        $service = Showhide::where('name', 'service')->first();
        $chooseus = Showhide::where('name', 'chooseus')->first();
        $progressarea = Showhide::where('name', 'progressarea')->first();
        $casestudy = Showhide::where('name', 'casestudy')->first();
        $pricingarea = Showhide::where('name', 'pricingarea')->first();
        $blog = Showhide::where('name', 'blog')->first();
        $testimonial = Showhide::where('name', 'testimonial')->first();
        $subscriber = Showhide::where('name', 'subscriber')->first();

        return view('admin.showhide.index', compact('showhides', 'slider', 'service', 'chooseus', 'progressarea', 'casestudy', 'pricingarea', 'blog', 'testimonial', 'subscriber'));
    }

    public function slider()
    {
        $slider = Showhide::where('name', 'slider')->first();

        if ($slider->show_hide == 1) {
            $slider->show_hide = 0;

            $slider->update();
        } else {
            $slider->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }

    public function service()
    {
        $service = Showhide::where('name', 'service')->first();

        if ($service->show_hide == 1) {
            $service->show_hide = 0;

            $service->update();
        } else {
            $service->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }

    public function chooseus()
    {

        $chooseus = Showhide::where('name', 'chooseus')->first();

        if ($chooseus->show_hide == 1) {
            $chooseus->show_hide = 0;

            $chooseus->update();
        } else {
            $chooseus->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }

    public function progressarea()
    {

        $progressarea = Showhide::where('name', 'progressarea')->first();

        if ($progressarea->show_hide == 1) {
            $progressarea->show_hide = 0;

            $progressarea->update();
        } else {
            $progressarea->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }

    public function casestudy()
    {

        $casestudy = Showhide::where('name', 'casestudy')->first();

        if ($casestudy->show_hide == 1) {
            $casestudy->show_hide = 0;

            $casestudy->update();
        } else {
            $casestudy->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }

    public function pricingarea()
    {

        $pricingarea = Showhide::where('name', 'pricingarea')->first();

        if ($pricingarea->show_hide == 1) {
            $pricingarea->show_hide = 0;

            $pricingarea->update();
        } else {
            $pricingarea->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }

    public function blog()
    {
        $blog = Showhide::where('name', 'blog')->first();

        if ($blog->show_hide == 1) {
            $blog->show_hide = 0;

            $blog->update();
        } else {
            $blog->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }

    public function testimonial()
    {
        $testimonial = Showhide::where('name', 'testimonial')->first();

        if ($testimonial->show_hide == 1) {
            $testimonial->show_hide = 0;

            $testimonial->update();
        } else {
            $testimonial->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }

    public function subscriber()
    {
        $subscriber = Showhide::where('name', 'subscriber')->first();

        if ($subscriber->show_hide == 1) {
            $subscriber->show_hide = 0;

            $subscriber->update();
        } else {
            $subscriber->update([
                'show_hide' => 1
            ]);
        }

        return redirect()->back();
    }
}
