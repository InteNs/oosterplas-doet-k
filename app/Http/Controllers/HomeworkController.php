<?php

namespace App\Http\Controllers;

use App\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function index()
    {
        return view('homework');
    }

    public function store(Request $request)
    {
        Homework::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);

        return redirect('huiswerkbegeleiding')->with('status', true);
    }
}
