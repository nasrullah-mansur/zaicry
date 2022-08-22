<?php

namespace App\Http\Controllers\Admin;

use App\Subscriber;
use App\Mail\SubscriberMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscriber.index', compact('subscribers'));
    }

    public function create()
    {
        return view('admin.subscriber.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:subscribers',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Subscriber::create($request->all());

        return redirect(route('subscribers.index'))->with('success', 'Subscriber created successfully');
    }

    public function edit($id)
    {
        $subscribers = Subscriber::findOrFail($id);

        return view('admin.subscriber.create', compact('subscribers'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:subscribers',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $subscribers = Subscriber::FindOrFail($id);

        $subscribers->update($request->all());

        return redirect(route('subscribers.index'))->with('success', 'Subscriber updated successfully');
    }


    public function destroy($id)
    {
        $subscriber = Subscriber::FindOrFail($id);
        $subscriber->delete();


        return redirect(route('subscribers.index'))->with('toast_warning', 'Subscriber deleted successfully ');
    }

    public function sendMail()
    {
        return view('admin.subscriber.mail');
    }

    public function sendMailToAll(Request $request)
    {
        $subscriber = Subscriber::all();

        $message = $request->subscriber_message;
        $subject = $request->subject;

        foreach ($subscriber as $subs) {
            Mail::to($subs->email)->send(new SubscriberMail($subject, $message));
        }

        return back()->with('toast_success', 'All the mail is sent successfully');
    }
}
