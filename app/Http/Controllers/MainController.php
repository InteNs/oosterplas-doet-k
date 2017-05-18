<?php

namespace App\Http\Controllers;

use App\Slider;

class MainController extends Controller
{
    public function index()
    {
        return view('index')->with('slider', Slider::find(1));
    }
}
