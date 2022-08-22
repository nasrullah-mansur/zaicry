<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        if (Subscriber::where('email', $request->email)->exists()) {

            session()->flash('success', 'You are already subscribed');

            return redirect()->back();
        }

        Subscriber::create($request->all());

        session()->flash('success', 'You are successfully subscribed');

        return redirect()->back();
    }
}
