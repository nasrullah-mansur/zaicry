<?php

namespace App\Http\Controllers\Front;

use App\Pricing;
use App\Pricingarea;
use App\ServicePage;
use App\Workprocess;
use App\ServiceChild;

use Illuminate\Http\Request;
use App\WorkingProcessProject;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        $servicepage = ServicePage::first();
        $pricingarea = Pricingarea::first();
        $pricings = Pricing::with('pricingButton')->get();
        $servicechild = ServiceChild::all();

        $workprocess = Workprocess::first();
        $workprocessproject = WorkingProcessProject::all();

        return view('front.service', compact('workprocess', 'workprocessproject', 'servicechild', 'servicepage', 'pricingarea', 'pricings'));
    }

    public function show($id)
    {

        $servicechild = ServiceChild::findOrfail($id);


        $workprocess = Workprocess::first();
        $workprocessproject = WorkingProcessProject::all();

        return view('front.servicedetail', compact('servicechild', 'workprocess', 'workprocessproject'));
    }
}
