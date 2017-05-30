<?php

namespace App\Http\Controllers;

use App\Entry;
use App\Activity;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function index()
    {
        return view('homework')->with('activity', Activity::find(1));
    }

    public function store(Request $request)
    {
        Entry::firstOrCreate([
            'activity_id' => 1,
            'email' => $request->input('email'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'phone' => $request->input('phone')
        ]);

        return redirect('huiswerkbegeleiding')->with('status', true);
    }
}
