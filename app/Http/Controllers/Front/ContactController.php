<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();

        return view('front.contact', compact('contact'));
    }


    public function contact(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );

        Mail::to('test@gmail.com')->send(new ContactUsMail($data));

        session()->flash('success', 'Your Message is sent successfully');
        return redirect()->back();
    }
}
