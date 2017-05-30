<?php

namespace App\Http\Controllers;

use App\Message;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function post(Request $request)
    {
        $status = null;
        $message = null;

        if ($request->event == 'subscribe') {
            $subscriber = Subscriber::where('email', $request->email)->first();
            if ($subscriber != null) {
                $status = 'error';
                $message = 'Je hebt je al aangemeld voor onze nieuwsbrief';
                return redirect('contact')->with($status, $message);
            }
            $status = 'message';
            $message = 'U heeft zich succesvol aangemeld voor onze nieuwsbrief!';
            $this->subscribe($request);
        } elseif ($request->event == 'unsubscribe') {
            $status = 'message';
            $message = 'U heeft zich succesvol afgemeld voor onze nieuwsbrief!';
            $this->unsubscribe($request);
        } elseif (Input::get('createSubmit')) {
            $status = 'status';
            $message = 'Bedankt voor het opnemen van contact met ons, we zullen spoedig een reactie sturen.';
            $this->store($request);
        }

        return redirect('contact')->with($status, $message);
    }

    public function store(Request $request)
    {
        Message::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone', null),
            'text' => $request->input('text')
        ]);
    }

    public function subscribe(Request $request)
    {
        Subscriber::create([
            'email' => $request->input('email'),
        ]);
    }

    public function unsubscribe(Request $request)
    {
        $subscriber = Subscriber::where('email', $request->email)->first();
        Subscriber::destroy($subscriber->id);
    }
}
